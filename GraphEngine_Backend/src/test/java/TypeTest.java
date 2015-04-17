import org.javalite.activejdbc.Base;
import org.json.JSONObject;
import org.junit.After;
import org.junit.Before;
import org.junit.Test;

import java.sql.Connection;
import java.sql.Statement;

import static org.junit.Assert.assertEquals;
import static org.junit.Assert.assertTrue;

public class TypeTest{

    @Before
    public void setUp() throws Exception{
        /*Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/", "root", "");
        Connection con = Base.connection();
        ScriptRunner runner = new ScriptRunner(con, false, true);
        runner.runScript(new BufferedReader(new FileReader("src/test/resources/graph_engine_test.sql")));*/

        Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/graph_engine_test", "root", "ishita");
        Connection con = Base.connection();
        con.setAutoCommit(false);
        Base.openTransaction();
    }

    @After
    public void tearDown() throws Exception{
        /*Connection con = Base.connection();
        Statement s = con.createStatement();
        s.executeUpdate("DROP DATABASE `graph_engine_test`;");*/

        Connection con = Base.connection();
        Statement s = con.createStatement();

        Base.rollbackTransaction();
        s.executeUpdate("ALTER TABLE types auto_increment = 3");
        Base.close();
    }

    @Test
    public void testRead() throws Exception{
        Type type = new Type();
        String readJson  = "{" +
                "id : 1" +
                "}";
        String expectedOut = "[\n" +
                "  {\n" +
                "    \"id\":1,\n" +
                "    \"name\":\"type_1\"\n" +
                "  }\n" +
                "]";
        JSONObject jsonObject= new JSONObject(readJson);
        readJson = type.read(jsonObject).toJson(true).toString();

        assertEquals("Type read test: pass", expectedOut, readJson);
    }

    @Test
    public void testAdd() throws Exception{
        Type type = new Type();
        String addJson = "{" +
                "name: type_3" +
                "}";
        String expectedOut = "[\n" +
                "  {\n" +
                "    \"id\":3,\n" +
                "    \"name\":\"type_3\"\n" +
                "  }\n" +
                "]";
        JSONObject jsonObject = new JSONObject(addJson);
        addJson = type.add(jsonObject).toJson(true).toString();
        assertEquals("Type add test: pass", expectedOut, addJson);



    }

    @Test
    public void testUpdate() throws Exception{
        Type type = new Type();
        String updateJson = "{" +
                "id: 2," +
                "name: type_4" +
                "}";
        String expectedOut = "[\n" +
                "  {\n" +
                "    \"id\":2,\n" +
                "    \"name\":\"type_4\"\n" +
                "  }\n" +
                "]";
        JSONObject jsonObject = new JSONObject(updateJson);
        updateJson = type.update(jsonObject).toJson(true).toString();
        assertEquals("Type update test: pass", expectedOut, updateJson);

    }

    @Test
    public void testRemove() throws Exception{
        Type type = new Type();
        String removeJson = "{" +
                "id : 2" +
                "}";
        JSONObject jsonObject = new JSONObject(removeJson);
        boolean result = type.remove(jsonObject);
        assertTrue(result);

    }
}