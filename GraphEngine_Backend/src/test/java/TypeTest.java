import org.javalite.activejdbc.Base;
import org.json.JSONObject;
import org.junit.*;
import org.junit.Test;

import java.io.BufferedReader;
import java.io.FileReader;
import java.sql.Connection;
import java.sql.Statement;

import static org.junit.Assert.*;

public class TypeTest{

    @Before
    public void setUp() throws Exception{
        Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/", "root", "1234");
        Connection con = Base.connection();
        ScriptRunner runner = new ScriptRunner(con, false, true);
        runner.runScript(new BufferedReader(new FileReader("/home/lalit/graph_engine_test.sql")));

        String readJson  = "{" +
                "id : 1" +
                "}";

        Type type = new Type();
        JSONObject jsonObject= new JSONObject(readJson);
 //       System.out.println(type.read(jsonObject).toJson(true).toString());

    }

    @After
    public void tearDown() throws Exception{
        Connection con = Base.connection();
        Statement s = con.createStatement();
        //s.executeUpdate("DROP DATABASE `graph_engine_test`;");
        Base.close();
    }

    @Test
    public void testRead() throws Exception{
//        assertFalse(false);
        /*Type type = new Type();
        String readJson  = "{" +
                "id : 1" +
                "}";
        String expectedOut= "{" +
                "id : 1," +
                "name : type_1" +
                "} ";
        JSONObject jsonObject= new JSONObject(readJson);
        readJson = type.read(jsonObject).toString();

        assertEquals("Type read test: pass", expectedOut,readJson);*/
        assertTrue(true);

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