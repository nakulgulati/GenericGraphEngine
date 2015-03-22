import org.javalite.activejdbc.LazyList;
import org.json.JSONObject;

import java.util.ArrayList;
import java.util.List;

public class Type extends TableModel{

    @Override
    public LazyList<TableModel> read(JSONObject params){
        /*TODO
        * handle exceptions
        */
        String args;
        LazyList<TableModel> modelList = null;
        Type type;
        
        if(params.has("id")){
            args = params.get("id").toString();
            if(args.equals("*")){
                modelList = Type.findAll();
            }
            else{
                type = Type.findById(Integer.parseInt(args));
                if(type != null)
                    modelList.add(type);
            }
        }
        return modelList;
    }

    @Override
    public LazyList<TableModel> add(JSONObject params){
        /*TODO
        * handle exceptions
        */
        LazyList<TableModel> modelList;
        Type type = new Type();
        type.set("name", params.get("name").toString());
        type.saveIt();
        long id = (long) type.getId();
        modelList = Type.find("id = ?", id);
        return modelList;

    }

    @Override
    public LazyList<TableModel> update(JSONObject params){
        /*TODO
        * handle exceptions
        * change
        */
        LazyList<TableModel> modelList;
        int id = Integer.parseInt(params.get("id").toString());
        Type type = Type.findById(id);
        if(type == null){
            return null;
        }
        type.set("name", params.get("name").toString()).saveIt();
        long lastupdatedId =type.getLongId();
        modelList = find("id=?", lastupdatedId);
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
