import org.javalite.activejdbc.LazyList;
import org.javalite.activejdbc.Model;
import org.json.JSONObject;

public class TableModel extends Model {

    public LazyList<TableModel> read(JSONObject params){
        return null;
    }

    public boolean add(JSONObject params){
       return false;
    }

    public boolean update(JSONObject params){
        return false;
    }

    public boolean remove(JSONObject params){
        return false;
    }

}
