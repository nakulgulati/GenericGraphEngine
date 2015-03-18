import org.javalite.activejdbc.LazyList;
import org.json.JSONObject;

public class Edge extends TableModel {

    @Override
    public LazyList<TableModel> read(JSONObject params) {

        LazyList<TableModel> modelList = null;

        if(params.has("field")){
            modelList = Edge.findAll();
        }

        if(params.has("from_id")){
            modelList = Edge.find("from_id = ?", Integer.parseInt(params.get("from_id").toString()));
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
        int to_id;

        if(params.has("id")){
            edge = Edge.findById(Integer.parseInt(params.get("id").toString()));
        }
        else if(params.has("from_id") && params.has("to_id") && params.has("to_id_new")){
            int from_id = Integer.parseInt(params.get("from_id").toString());
            to_id = Integer.parseInt(params.get("to_id").toString());
            edge = Edge.findFirst("from_id = ? and to_id = ?", from_id, to_id);
        }
        if(edge == null){
            return false;
        }

        to_id = Integer.parseInt(params.get("to_id_new").toString());
        edge.set("to_id", to_id);

       return edge.saveIt();

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
