import org.javalite.activejdbc.Base;

import java.io.DataInputStream;
import java.io.IOException;
import java.io.PrintStream;
import java.net.ServerSocket;
import java.net.*;
import java.nio.ByteBuffer;
import java.nio.channels.ServerSocketChannel;
import java.nio.channels.SocketChannel;
import java.util.List;

public class Test {

    private static ServerSocket ss = null;
    private static Socket cs = null;
    private static PrintStream os = null;
    private static DataInputStream is = null;
    public static void main(String[] args) throws IOException {
        Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/graph_engine_db", "root", "1234");

       /* List<String> list = Node.attributes();
        String s;

        for(int i = 0; i<list.size(); i++){
            s = list.get(i);
            System.out.println(s);
        }

        Node n = new Node();

        n.set("name", "A");

   /* try{
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
        */

        ServerSocketChannel ssc = ServerSocketChannel.open();
        ssc.socket().bind(new InetSocketAddress(9999));
        System.out.println("Started");
        ssc.configureBlocking(false);
        while(true){
            SocketChannel sc = ssc.accept();

            if(sc!=null){
                ByteBuffer buf = ByteBuffer.allocate(2048);
                int b = sc.read(buf);
                //buf.flip();
                System.out.println(new String(buf.array(),"UTF-8"));
               buf.clear();
                buf.put("Alriht alright alright".getBytes());
                buf.flip();
                while(buf.hasRemaining()){
                    sc.write(buf);
                }
                break;
            }
        }
            ssc.close();
    }
}
