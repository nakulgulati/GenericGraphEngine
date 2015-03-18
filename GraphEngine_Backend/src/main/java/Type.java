import org.javalite.activejdbc.LazyList;
import org.json.JSONObject;

public class Type extends TableModel {

    @Override
    public LazyList<TableModel> read(JSONObject params){
        /*TODO
        * handle exceptions
        */
        String field = params.get("field").toString();
        LazyList<TableModel> modelList = null;
        Type type;

        switch (field){
            case "*":
                modelList = Type.findAll();
                break;
            default:
                type = Type.findById(Integer.parseInt(field));
                if(type != null)
                    modelList.add(type);
        }

        return modelList;
    }

    @Override
    public boolean add(JSONObject params) {
        /*TODO
        * handle exceptions
        */
        Type type = new Type();
        type.set("name", params.getString("name"));
        return type.saveIt();
    }

    @Override
    public boolean update(JSONObject params) {
        /*TODO
        * handle exceptions
        */
        int id = Integer.parseInt(params.get("id").toString());
        Type type = Type.findById(id);
        return type != null && type.set("name", params.get("name").toString()).saveIt();

    }

    @Override
    public boolean remove(JSONObject params) {
        /*TODO
        * handle exceptions
        */
        int id = Integer.parseInt(params.get("id").toString());
        Type type = Type.findById(id);
        if(type != null){
            type.deleteCascade();
            return true;
        }
        return false;
    }
}
