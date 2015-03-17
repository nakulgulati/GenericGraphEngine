import org.javalite.activejdbc.LazyList;
import org.json.JSONObject;

public class Edge extends TableModel {

    @Override
    public LazyList<TableModel> read(JSONObject params) {

        String field = params.get("field").toString();
        LazyList<TableModel> modelList;

        switch (field){
        case "*":
            modelList = Edge.findAll();
            break;

        default:
            modelList = Edge.where("type_id = ?", (Integer.parseInt(field)) );
        }
        return modelList;
    }

    @Override
    public boolean add(JSONObject params) {

        if(!params.has("from_id") || !params.has("to_id")){
            return false;
        }
        Edge edge = new Edge();
        edge.set("from_id",Integer.parseInt(params.get("from_id").toString())).set("to_id",Integer.parseInt(params.get("to_id").toString()));

        return edge.saveIt();

    }

    @Override
    public boolean update(JSONObject params) {

        Edge edge = new Edge();
        if(params.has("id")){
            edge = Edge.findById(Integer.parseInt(params.get("id").toString()));
        }
        else if(params.has("from_id") && params.has("to_id")){
            edge= Edge.findById(Integer.parseInt(params.get("from_id").toString(),Integer.parseInt(params.get("to_id").toString())));
        }
        if(edge == null){
            return false;
        }

       return edge.set("to_id= ?",Integer.parseInt(params.get("to_id").toString())).saveIt();

    }

    @Override
    public boolean remove(JSONObject params) {
        Edge edge = new Edge();
        if(params.has("id")){
            edge = Edge.findById(Integer.parseInt(params.get("id").toString()));
        }
        else if(params.has("from_id") && params.has("to_id")){
            edge= Edge.findById(Integer.parseInt(params.get("from_id").toString(),Integer.parseInt(params.get("to_id").toString())));
        }
        if(edge== null){
            return false;
        }
        edge.delete();
        return true;
    }

    }
