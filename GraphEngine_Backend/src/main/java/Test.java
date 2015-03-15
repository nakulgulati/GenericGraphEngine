import org.javalite.activejdbc.Base;

public class Test {

    public static void main(String[] args){
        Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/graph_engine_db", "root", "");

        String s = "{\n" +
                "\"table\" : \"type\",\n" +
                "\"operation\" : \"read\",\n" +
                "\"field\" : \"*\"\n" +
                "}";

        String response = new Process(s).operateCRUD();
        System.out.println(response);

    }

    public synchronized void t(){
        System.out.println();
    }
}
