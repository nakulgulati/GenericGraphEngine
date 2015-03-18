import org.javalite.activejdbc.Base;

public class Test {

    public static void main(String[] args){
        Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/graph_engine_db", "root", "");

        /*Type type = new Type();
        type.set("name", "K");
        type.saveIt();*/

        String c = "{\n" +
                "\"table\" : \"node\",\n" +
                "\"operation\" : \"create\",\n" +
                "\"data\" : {" +
                    "name : node10,\n" +
                    "type_id : 3\n" +
                    "}" +
                "}";

        String r = "{\n" +
                "\"table\" : \"node\",\n" +
                "\"operation\" : \"read\",\n" +
                "\"data\" : {" +
                "field : 13" +
                "}" +
                "}";

        String u = "{\n" +
                "\"table\" : \"node\",\n" +
                "\"operation\" : \"read\",\n" +
                "\"data\" : {" +
                "id : 13" +
                "}" +
                "}";

        String d = "{\n" +
                "\"table\" : \"node\",\n" +
                "\"operation\" : \"read\",\n" +
                "\"data\" : {" +
                "id : 13" +
                "}" +
                "}";

        String response = new Process(r).operateCRUD();
        System.out.println(response);

    }
}
