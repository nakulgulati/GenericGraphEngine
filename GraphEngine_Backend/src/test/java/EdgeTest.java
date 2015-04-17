import org.javalite.activejdbc.Base;
import org.json.JSONObject;
import org.junit.After;
import org.junit.Before;
import org.junit.Test;

import java.sql.Connection;
import java.sql.Statement;

import static org.junit.Assert.assertEquals;
import static org.junit.Assert.assertTrue;

public class EdgeTest{

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
        s.executeUpdate("ALTER TABLE edges auto_increment = 8");
        Base.close();

    }

    @Test
    public void testRead() throws Exception{
        Edge edge = new Edge();
        String readJson = "{" +
                "from_id : 1" +
                "}";
        String expectedOut = "[\n" +
                "  {\n" +
                "    \"from_id\":1,\n" +
                "    \"id\":1,\n" +
                "    \"to_id\":3\n" +
                "  },\n" +
                "  {\n" +
                "    \"from_id\":1,\n" +
                "    \"id\":2,\n" +
                "    \"to_id\":4\n" +
                "  }\n" +
                "]";
        JSONObject jsonObject = new JSONObject(readJson);
        readJson = edge.read(jsonObject).toJson(true).toString();
        assertEquals("Edge read test: pass", expectedOut, readJson);


    }

    @Test
    public void testAdd() throws Exception{
        Edge edge = new Edge();
        String addJson = "{" +
                "from_id : 3," +
                "to_id : 4" +
                "}";
        String expectedOut = "[\n" +
                "  {\n" +
                "    \"from_id\":3,\n" +
                "    \"id\":8,\n" +
                "    \"to_id\":4\n" +

                "  }\n" +
                "]";
        JSONObject jsonObject = new JSONObject(addJson);
        addJson = edge.add(jsonObject).toJson(true).toString();
        assertEquals("Edge add test: pass", expectedOut, addJson);

    }

    @Test
    public void testUpdate() throws Exception{
        Edge edge = new Edge();
        String updateJson = "{" +
                "from_id : 1," +
                "to_id : 4," +
                "to_id_new : 2" +
                "}";
        String expectedOut = "[\n" +
                "  {\n" +
                "    \"from_id\":1,\n" +
                "    \"id\":2,\n" +
                "    \"to_id\":2\n" +

                "  }\n" +
                "]";
        JSONObject jsonObject = new JSONObject(updateJson);
        updateJson = edge.update(jsonObject).toJson(true).toString();
        assertEquals("Edge updtae test: pass", expectedOut, updateJson);

    }

    @Test
    public void testRemove() throws Exception{
        Edge edge = new Edge();
        String removeJson = "{" +
                "from_id : 2," +
                "to_id : 3" +
                "}";

        JSONObject jsonObject = new JSONObject(removeJson);
        boolean result = edge.remove(jsonObject);
        assertTrue(result);
    }

    @Test
    public void testGetEntityAssociations() throws Exception{
        Edge edge = new Edge();
        String input = "{" +
                "from_id : 2," +
                "type_id : 1" +
                "}";
        String expectedOut = "[\n" +
                "  {\n" +
                "    \"from_id\":2,\n" +
                "    \"id\":3,\n" +
                "    \"to_id\":1\n" +
                "  },\n" +
                "  {\n" +
                "    \"from_id\":2,\n" +
                "    \"id\":4,\n" +
                "    \"to_id\":3\n" +
                "  }\n" +
                "]";
        JSONObject jsonObject = new JSONObject(input);
        input = edge.getEntityAssociations(jsonObject).toJson(true).toString();
        assertEquals("Edge get entity associations test: pass", expectedOut, input);
    }
}