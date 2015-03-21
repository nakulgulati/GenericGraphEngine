import org.javalite.activejdbc.LazyList;
import org.json.JSONObject;

public class Type extends TableModel{

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
    public LazyList<TableModel> add(JSONObject params){
        /*TODO
        * handle exceptions
        */
        LazyList<TableModel> modelList = null;
        Type type = new Type();
        type.set("name", params.get("name").toString());
        type.saveIt();
        modelList.add(type);
        return modelList;

    }

    @Override
    public LazyList<TableModel> update(JSONObject params){
        /*TODO
        * handle exceptions
        */
        LazyList<TableModel> modelList = null;
        int id = Integer.parseInt(params.get("id").toString());
        Type type = Type.findById(id);
        if(type == null){
            return null;
        }
        type.set("name", params.get("name").toString()).saveIt();
        modelList.add(type);
        return modelList;
    }

    @Override
    public boolean remove(JSONObject params){
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
