import org.javalite.activejdbc.LazyList;
import org.json.JSONObject;

public class Node extends TableModel {
    @Override
    public LazyList<TableModel> read(JSONObject params) {
        return super.read(params);
    }

    @Override
    public boolean add(JSONObject params) {
        return super.add(params);
    }

    @Override
    public boolean update(JSONObject params) {
        return super.update(params);
    }

    @Override
    public boolean remove(JSONObject params) {
        return super.remove(params);
    }
}
