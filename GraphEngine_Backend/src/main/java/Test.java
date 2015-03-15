import org.javalite.activejdbc.Base;

public class Test {

    public static void main(String[] args){
        Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/graph_engine_db", "root", "");

        String s = "{\n" +
                "\"table\" : \"type\",\n" +
                "\"operation\" : \"read\",\n" +
                "\"field\" : \"*\"\n" +
                "}";

        new Process(s).operateCRUD();

        /*JSONObject jsonObject = new JSONObject(s);

        System.out.println(jsonObject.toString());
        System.out.println(jsonObject.getJSONObject("data").get("name").toString());*/




    }

    public synchronized void t(){
        System.out.println();
    }
}
