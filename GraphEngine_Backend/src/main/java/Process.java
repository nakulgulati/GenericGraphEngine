import org.json.JSONObject;

public class Process {

    protected String request_string = null;
    protected JSONObject json = null;
    protected TableModel model = null;

    public Process(String request_string){
        this.request_string = request_string;
        setJsonObject();
        getModel();
    }

    private void setJsonObject(){
        this.json = new JSONObject(this.request_string);
    }

    private void getModel(){
        TableModel model = null;
        String table = json.get("table").toString();

        switch (table){
            case "node":
                model = new Node();
                break;
            case "edge":
                model = new Edge();
                break;
            case "type":
                model = new Type();
                break;
        }

        this.model = model;
    }

    public String operateCRUD(){

        String operation = json.get("operation").toString();
        JSONObject data = json.getJSONObject("data");
        Object response = null;

        switch (operation){
            case "create":
                response = model.add(data).toJson(true);
                if(response==null)
                    response =false;
                break;
            case "read":
                response = model.read(data).toJson(true);
                if(response==null)
                    response =false;
                break;
            case "update":
                response = model.update(data);
                if(response==null)
                    response =false;
                break;
            case "delete":
                response = model.remove(data);
                break;
            case "associations":
                response = model.getEntityAssociations(data).toJson(true);
                break;
        }

        return response.toString();
    }

}
