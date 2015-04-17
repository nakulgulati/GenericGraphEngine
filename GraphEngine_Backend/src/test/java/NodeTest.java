import org.javalite.activejdbc.Base;
import org.json.JSONObject;
import org.junit.After;
import org.junit.Before;
import org.junit.Test;

import java.sql.Connection;
import java.sql.Statement;

import static org.junit.Assert.assertEquals;
import static org.junit.Assert.assertTrue;

public class NodeTest{

    @Before
    public void setUp() throws Exception{

        Base.open("com.mysql.jdbc.Driver", "jdbc:mysql://localhost/graph_engine_test", "root", "ishita");
        Connection con = Base.connection();
        con.setAutoCommit(false);
        Base.openTransaction();
    }

    @After
    public void tearDown() throws Exception{
        Connection con = Base.connection();
        Statement s = con.createStatement();

        Base.rollbackTransaction();
        s.executeUpdate("ALTER TABLE nodes auto_increment = 5");
        Base.close();
    }

    @Test
    public void testRead() throws Exception{
        Node node = new Node();
        String readJson = "{" +
                "id : 1" +
                "}";
        String expectedOut = "[\n" +
                "  {\n" +
                "    \"id\":1,\n" +
                "    \"name\":\"node_1\",\n" +
                "    \"type_id\":1\n" +

                "  }\n" +
                "]";
        JSONObject jsonObject = new JSONObject(readJson);
        readJson = node.read(jsonObject).toJson(true).toString();
        assertEquals("Node read test: pass", expectedOut, readJson);
    }

    @Test
    public void testAdd() throws Exception{
        Node node = new Node();
        String addJson = "{" +
                "name : node_5," +
                "type_id: 1" +
                "}";
        String expectedOut = "[\n" +
                "  {\n" +
                "    \"id\":5,\n" +
                "    \"name\":\"node_5\",\n" +
                "    \"type_id\":1\n" +

                "  }\n" +
                "]";
        JSONObject jsonObject = new JSONObject(addJson);
        addJson = node.add(jsonObject).toJson(true).toString();
        assertEquals("Node add test: pass", expectedOut, addJson);

    }

    @Test
    public void testUpdate() throws Exception{
        Node node = new Node();
        String updateJson = "{" +
                "id: 1," +
                "name : node_6" +

                "}";
        String expectedOut = "[\n" +
                "  {\n" +
                "    \"id\":1,\n" +
                "    \"name\":\"node_6\",\n" +
                "    \"type_id\":1\n" +

                "  }\n" +
                "]";

        JSONObject jsonObject = new JSONObject(updateJson);
        updateJson = node.update(jsonObject).toJson(true).toString();
        assertEquals("Node update test: pass", expectedOut, updateJson);
    }

    @Test
    public void testRemove() throws Exception{
        Node node = new Node();
        String removeJson = "{" +
                "id : 2" +
                "}";
        JSONObject jsonObject = new JSONObject(removeJson);
        boolean result = node.remove(jsonObject);
        assertTrue(result);
    }
}