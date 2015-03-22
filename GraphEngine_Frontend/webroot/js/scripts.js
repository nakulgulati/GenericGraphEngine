function hideForms() {
    $("form").hide();
}

$("nav .dropdown-menu li").click(displaySelectedForm);

function displaySelectedForm(e) {
    if (e.target !== e.currentTarget) {
        var formName = $(this).attr("value");
        hideForms();
        $('form[name="' + formName + '"]').show();
    }
    e.stopPropagation();
}

function displayEntityAssociationGraph(json_response) {

    /*TODO
     * find a better way to implement this*/
    var nodeList = [];

    nodeList.push({
        "id": (json_response[0].from_id).toString(),
        "label": (json_response[0].from_id).toString(),
        "x": 0,
        "y": 0,
        "size": 1
    });

    for (var i = 0; i < json_response.length; i++) {
        nodeList.push({
            "id": (json_response[i].to_id).toString(),
            "label": (json_response[i].to_id).toString(),
            "x": Math.random(),
            "y": Math.random(),
            "size": 1
        });
    }

    for (var i = 0; i < json_response.length; i++) {
        for (var e in json_response[i]) {
            json_response[i][e] = json_response[i][e].toString();
        }
        json_response[i] = JSON.stringify(json_response[i]);
        json_response[i] = json_response[i].replace("\"from_id\":", "\"source\":");
        json_response[i] = json_response[i].replace("\"to_id\":", "\"target\":");
        json_response[i] = JSON.parse(json_response[i]);
    }

    var data = {
        "nodes": nodeList,
        "edges": json_response
    };

    s = new sigma({
        graph: data,
        container: 'sigmaTest',
        settings: {
            defaultNodeColor: '#ec5148'
        }
    });
}