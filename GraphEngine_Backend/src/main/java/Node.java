import org.javalite.activejdbc.LazyList;
import org.json.JSONObject;

public class Node extends TableModel {
    @Override
    public LazyList<TableModel> read(JSONObject params) {
        String args;
        LazyList<TableModel> modelList = null;
        Node node;
        if(params.has("id")) {
            args= params.get("id").toString();
            node = Node.findById(Integer.parseInt(args));
            if (node != null) {
                modelList.add(node);
            }
        }
        if(params.has("field")){
            args= params.get("field").toString();
            modelList = Type.findAll();
        }

        if(params.has("type_id")){
            args= params.get("type_id").toString();
            modelList = Node.where("type_id = ?", (Integer.parseInt(args)) );
        }

        return modelList;
    }

    @Override
    public boolean add(JSONObject params) {
        String name = params.get("name").toString();
        int type_id = Integer.parseInt(params.get("type_id").toString());
        Node node= new Node();
        node.set("name", "'"+name+"'" ).set("type_id", type_id);
        return node.saveIt();
    }

    @Override
    public boolean update(JSONObject params) {
        int id = Integer.parseInt(params.get("id").toString());

        Node node ;
        node = Node.findById(id);
        if(node == null){
            return false;
        }
        if(!params.has("name") && !params.has("type_id")){
            return false;
        }
        if(params.has("name")){
            node.set("name",params.get("name").toString());
         }
        if(params.has("type_id")){
            node.set("type_id", params.get("type_id").toString());
        }

        return node.saveIt();
    }

    @Override
    public boolean remove(JSONObject params) {
        int id = Integer.parseInt(params.get("id").toString());
        Node node;
        node = Node.findFirst("id= ?", "'"+ id+ "'");
        if (node==null){
            return false;
        }
        node.deleteCascade();
        return true;
    }
}
