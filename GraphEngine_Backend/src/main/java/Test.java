import org.javalite.activejdbc.Base;

import java.io.DataInputStream;
import java.io.IOException;
import java.io.PrintStream;
import java.net.ServerSocket;
import java.net.*;
import java.util.List;

public class Test {

    private static ServerSocket ss = null;
    private static Socket cs = null;
    private static PrintStream os = null;
    private static DataInputStream is = null;
    public static void main(String[] args) throws IOException {
        Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/graph_engine_db", "root", "1234");

        List<String> list = Node.attributes();
        String s;

        for(int i = 0; i<list.size(); i++){
            s = list.get(i);
            System.out.println(s);
        }

        Node n = new Node();

        n.set("name", "A");

    try{
        ss = new ServerSocket(6967);
        System.out.println("Started");


        while(true){

            cs = ss.accept();

            System.out.println(cs);
            is = new DataInputStream(cs.getInputStream());
            os = new PrintStream(cs.getOutputStream());
            System.out.println(is.readLine());
            os.println("YoYo");

        }

    }catch (Exception e){
        System.err.println(e);
    }finally {

    }
        try {
            cs.close();
            ss.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }

}
