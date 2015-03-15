import org.javalite.activejdbc.LazyList;

public class Type extends TableModel {

    @Override
    public LazyList<TableModel> read(String params){
        LazyList<TableModel> modelList = null;
        Type type;

        switch (params){
            case "*":
                modelList = Type.findAll();
                break;
            default:
                type = Type.findById(Integer.parseInt(params));
                modelList.add(type);
        }

        return modelList;
    }

    @Override
    public boolean add(String params) {
        return super.add(params);
    }

    @Override
    public boolean update(String params) {
        return super.update(params);
    }

    @Override
    public boolean remove(String params) {
        return super.remove(params);
    }
}
