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

    public synchronized String operateCRUD(){

        String operation = json.get("operation").toString();
        String field = json.get("field").toString();
        Object response = null;

        switch (operation){
            case "create":
                break;
            case "read":
                response = model.read(field).toJson(true);
                break;
            case "update":
                break;
            case "delete":
                break;
        }

        return response.toString();
    }

}
