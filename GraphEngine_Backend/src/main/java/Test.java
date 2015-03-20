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
                "\"table\" : \"edge\",\n" +
                "\"operation\" : \"update\",\n" +
                "\"data\" : {" +
                "from_id : 1," +
                "to_id : 5," +
                "to_id_new : 2" +
                "}" +
                "}";

        String d = "{\n" +
                "\"table\" : \"edge\",\n" +
                "\"operation\" : \"delete\",\n" +
                "\"data\" : {" +
                "from_id : 1," +
                "to_id : 2," +
                "}" +
                "}";

        String response = new Process(d).operateCRUD();
        System.out.println(response);


    }
}
