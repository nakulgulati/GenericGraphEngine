import org.javalite.activejdbc.Base;
import org.javalite.activejdbc.LazyList;
import org.javalite.activejdbc.Model;
import org.json.JSONObject;

import java.io.*;
import java.net.ServerSocket;
import java.net.Socket;

public class Server {

    protected int          serverPort   = 8080;
    protected ServerSocket serverSocket = null;
    protected boolean isStopped = false;

    public Server(int port){
        this.serverPort = port;
    }

    private void openServerSocket() {
        try {
            this.serverSocket = new ServerSocket(this.serverPort);
        } catch (IOException e) {
            throw new RuntimeException("Cannot open port 8080", e);
        }
    }

    private boolean isStopped(){
        return this.isStopped;
    }

    public void run(){

        openServerSocket();
        while(!isStopped()){
            Socket clientSocket = null;
            try {
                clientSocket = this.serverSocket.accept();
            } catch (IOException e) {
                if(isStopped()) {
                    System.out.println("Server Stopped.") ;
                    return;
                }
                throw new RuntimeException(
                        "Error accepting client connection", e);
            }
            new Thread(new Worker(clientSocket)).start();
        }
        System.out.println("Server Stopped.") ;
    }


    public class Worker implements Runnable{

        protected Socket clientSocket = null;

        public Worker(Socket clientSocket) {
            this.clientSocket = clientSocket;
        }

        @Override
        public void run() {
            Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/graph_engine_db", "root", "");
            System.out.println("Client Accepted");
            try {
                InputStream input  = clientSocket.getInputStream();
                OutputStream output = clientSocket.getOutputStream();
                long time = System.currentTimeMillis();

                PrintStream os = new PrintStream(output);

                /*process here*/

                /*
                * string to json -> DONE
                * process json
                * determine model -> return object -> DONE
                * determine operation (CRUD) -> call appropriate method on object
                * */

                String s = new BufferedReader(new InputStreamReader(input)).readLine();
                System.out.println(s);

/*
                while((new BufferedReader(new InputStreamReader(input)).readLine()).equals(null)){
                    s = new BufferedReader(new InputStreamReader(input)).readLine();
                    System.out.println(s);
                }*/

                /*{
                    "table" : "type",
                    "method" : "read",
                    "field" : "*"
                }*/



                /*JSONObject jsonObject = new JSONObject(s);

                if(jsonObject.get("table").equals("type") && jsonObject.get("method").equals("read")){
                    System.out.println(jsonObject.get("field"));

                    Model m = new Type();

                    LazyList<Model> types = m.findAll();

                    String json = types.toJson(true);
                    os.println(json);
                    System.out.println(json);
                }

                Test t = new Test();
                t.t();*/

                output.close();
                input.close();
                System.out.println("Request processed: " + time);
            } catch (Exception e) {
                //report exception somewhere.
                e.printStackTrace();
            }

        }
    }

    public static void main(String[] args){
        Server s = new Server(8090);
        s.run();
    }

}
