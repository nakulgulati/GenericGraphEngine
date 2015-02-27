import org.javalite.activejdbc.Base;

import java.io.DataInputStream;
import java.net.ServerSocket;
import java.net.*;
import java.util.List;

public class Test {

    private static ServerSocket ss = null;
    private static Socket cs = null;
    private static DataInputStream is = null;
    public static void main(String[] args){
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
        ss = new ServerSocket(6969);


        while(true){
            cs = ss.accept();
            is = new DataInputStream(cs.getInputStream());
            System.out.println(is.readUTF());

        }
    }catch (Exception e){
        System.err.println(e);
    }

    }

}
