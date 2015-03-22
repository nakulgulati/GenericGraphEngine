import org.javalite.activejdbc.Base;

import java.io.*;
import java.net.ServerSocket;
import java.net.Socket;

public class Server{

    protected int serverPort = 8080;
    protected ServerSocket serverSocket = null;
    protected boolean isStopped = false;

    public Server(int port){
        this.serverPort = port;
    }

    private void openServerSocket(){
        try{
            this.serverSocket = new ServerSocket(this.serverPort);
        } catch(IOException e){
            throw new RuntimeException("Cannot open port 8080", e);
        }
    }

    private boolean isStopped(){
        return this.isStopped;
    }

    public void run(){
        System.out.println("Server Running...");

        openServerSocket();
        while(!isStopped()){
            Socket clientSocket = null;
            try{
                clientSocket = this.serverSocket.accept();
            } catch(IOException e){
                if(isStopped()){
                    System.out.println("Server Stopped.");
                    return;
                }
                throw new RuntimeException(
                        "Error accepting client connection", e);
            }
            new Thread(new Worker(clientSocket)).start();
        }
        System.out.println("Server Stopped.");
    }


    public class Worker implements Runnable{

        protected Socket clientSocket = null;

        public Worker(Socket clientSocket){
            this.clientSocket = clientSocket;
        }

        @Override
        public void run(){
            /*TODO
            * find a place to open connection that is available to all threads*/
            Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/graph_engine_db", "root", "");

            System.out.println("Client Accepted");
            try{
                InputStream input = clientSocket.getInputStream();
                OutputStream output = clientSocket.getOutputStream();

                PrintStream os = new PrintStream(output);

                /*process here*/

                String s = new BufferedReader(new InputStreamReader(input)).readLine();
                System.out.println(s);

                String response = new Process(s).operateCRUD();
                os.println(response);

                output.close();
                input.close();
                Base.close();
            } catch(Exception e){
                //report exception somewhere.
                e.printStackTrace();
            }

        }
    }

    public static void main(String[] args){


        Server server = new Server(8090);
        server.run();
    }

}
