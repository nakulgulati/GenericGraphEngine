import org.javalite.activejdbc.Base;

public class Test {

    public static void main(String[] args){
        Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/graph_engine_db", "root", "");

        /*Type type = new Type();
        type.set("name", "K");
        type.saveIt();*/

        String s = "{\n" +
                "\"table\" : \"type\",\n" +
                "\"operation\" : \"create\",\n" +
                "\"data\" : {" +
                    "name : L" +
                    "}" +
                "}";

        String response = new Process(s).operateCRUD();
        System.out.println(response);

    }
}
