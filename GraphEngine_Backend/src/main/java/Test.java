import org.javalite.activejdbc.Base;

import java.util.List;

public class Test {

    public static void main(String[] args){
        Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/graph_engine_db", "root", "");

        List<String> list = Node.attributes();
        String s;

        for(int i = 0; i<list.size(); i++){
            s = list.get(i);
            System.out.println(s);
        }

        Node n = new Node();

        n.set("name", "A");
    }

}
