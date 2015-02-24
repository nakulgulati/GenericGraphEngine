import org.javalite.activejdbc.Base;

import java.util.List;

public class Test {

    public static void main(String[] args){
        Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/graph_engine_db", "root", "");


        Node n = Node.findById(1);

        System.out.println(n.toJson(true));

    }

}
