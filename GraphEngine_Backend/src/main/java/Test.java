import org.javalite.activejdbc.Base;

import java.util.List;

public class Test {

    public static void main(String[] args){
        System.out.print("test");
        Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/graph_engine_db", "root", "");

        List<Node> nodes = Node.findAll();
    }

}
