import org.javalite.activejdbc.LazyList;
import org.json.JSONObject;

public class Type extends TableModel {

    @Override
    public LazyList<TableModel> read(String params){
        LazyList<TableModel> modelList = null;
        Type type;

        switch (params){
            case "*":
                modelList = Type.findAll();
                break;
            default:
                type = Type.findById(Integer.parseInt(params));
                modelList.add(type);
        }

        return modelList;
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
