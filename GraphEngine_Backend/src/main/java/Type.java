import org.javalite.activejdbc.LazyList;
import org.json.JSONObject;

public class Type extends TableModel {

    @Override
    public LazyList<TableModel> read(JSONObject params){
        /*TODO
        * handle exceptions
        */
        String args;
        LazyList<TableModel> modelList = null;
        Type type;
        if(params.has("field")){
            modelList = Type.findAll();
        }
        if(params.has("id")){
            args = params.get("id").toString();
            type = Type.findById(Integer.parseInt(args));
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
