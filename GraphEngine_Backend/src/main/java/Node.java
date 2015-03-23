import org.javalite.activejdbc.LazyList;
import org.json.JSONObject;

public class Node extends TableModel{
    @Override
    public LazyList<TableModel> read(JSONObject params){
        String args;
        int id, type_id;
        LazyList<TableModel> modelList = null;

        if(params.has("id")){
            args = params.get("id").toString();

            if(args.equals("*")){
                modelList = Node.findAll();
            } else{
                id = Integer.parseInt(args);
                modelList = Node.find("id = ?", id);
            }
        }

        if(params.has("type_id")){
            args = params.get("type_id").toString();
            type_id = Integer.parseInt(args);
            modelList = Node.find("type_id = ?", type_id);
        }

        return modelList;
    }

    @Override
    public LazyList<TableModel> add(JSONObject params){
        LazyList<TableModel> modelList = null;
        String name = params.get("name").toString();
        int type_id = Integer.parseInt(params.get("type_id").toString());
        Node node = new Node();
        node.set("name", name).set("type_id", type_id);
        node.saveIt();
        long id = (long) node.getId();
        modelList = find("id =?", id);
        return modelList;
    }

    @Override
    public LazyList<TableModel> update(JSONObject params){
        int id = Integer.parseInt(params.get("id").toString());
        LazyList<TableModel> modelList = null;
        Node node;
        node = Node.findById(id);
        if(node == null){
            return null;
        }
        if(!params.has("name") && !params.has("type_id")){
            return null;
        }
        if(params.has("name")){
            node.set("name", params.get("name").toString());
        }
        if(params.has("type_id")){
            node.set("type_id", params.get("type_id").toString());
        }

        node.saveIt();
        int lastUpdatedId = (int) node.getId();
        modelList = Node.find("id= ?", lastUpdatedId);
        return modelList;
    }

    @Override
    public boolean remove(JSONObject params){
        int id = Integer.parseInt(params.get("id").toString());
        Node node;
        node = Node.findFirst("id = ?", id);
        if(node == null){
            return false;
        }
        node.deleteCascade();
        return true;
    }
}
