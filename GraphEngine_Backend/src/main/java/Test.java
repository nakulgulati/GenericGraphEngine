import org.javalite.activejdbc.Base;
import org.json.JSONArray;
import org.json.JSONObject;
import org.json.JSONStringer;
import org.json.JSONTokener;
import sun.org.mozilla.javascript.internal.json.JsonParser;

import java.util.Objects;


public class Test {

    public static void main(String[] args){
        //Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/graph_engine_db", "root", "1234");

        String s = "{\"table\":\"type\",\"method\":\"add\",\"data\":{\"name\":\"Yo!\"}}";

        JSONObject jsonObject = new JSONObject(s);

        System.out.println(jsonObject.toString());
        System.out.println(jsonObject.getJSONObject("data").get("name").toString());

    }
}
