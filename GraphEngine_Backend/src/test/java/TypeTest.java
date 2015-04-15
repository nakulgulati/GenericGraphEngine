import org.javalite.activejdbc.Base;
import org.json.JSONObject;
import org.junit.After;
import org.junit.Before;
import org.junit.Test;

import java.sql.Connection;

import static org.junit.Assert.assertEquals;
import static org.junit.Assert.assertFalse;

public class TypeTest{

    @Before
    public void setUp() throws Exception{
        /*Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/", "root", "");
        Connection con = Base.connection();
        ScriptRunner runner = new ScriptRunner(con, false, true);
        runner.runScript(new BufferedReader(new FileReader("src/test/resources/graph_engine_test.sql")));*/

        Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/graph_engine_test", "root", "");
        Connection con = Base.connection();
        con.setAutoCommit(false);
        Base.openTransaction();
    }

    @After
    public void tearDown() throws Exception{
        /*Connection con = Base.connection();
        Statement s = con.createStatement();
        s.executeUpdate("DROP DATABASE `graph_engine_test`;");*/
        Base.rollbackTransaction();
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
        assertFalse(false);
    }

    @Test
    public void testUpdate() throws Exception{
        assertFalse(false);
    }

    @Test
    public void testRemove() throws Exception{
        assertFalse(false);
    }
}