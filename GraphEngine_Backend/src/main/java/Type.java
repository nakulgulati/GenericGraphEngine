import org.javalite.activejdbc.LazyList;
import org.json.JSONObject;

public class Type extends TableModel {

    @Override
    public LazyList<TableModel> read(JSONObject params){
        String field = params.get("field").toString();
        LazyList<TableModel> modelList = null;
        Type type;

        switch (field){
            case "*":
                modelList = Type.findAll();
                break;
            default:
                type = Type.findById(Integer.parseInt(field));
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
