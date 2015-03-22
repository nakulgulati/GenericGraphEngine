/*Sample sigma graph*/
sampleGraph(100,75);

function sampleGraph(nodes, edges){
    var nodeList = [];
    var edgeList = [];

    /*generate nodes*/
    for(var i = 1; i <= nodes; i++){
        nodeList.push({
            "id": i.toString(),
            "label": "node"+i,
            "x": Math.floor((Math.random() * 850) + 1),
            "y": Math.floor((Math.random() * 200) + 1),
            "size": 1
        });
    }

    /*generating edges*/
    for(i = 0; i < edges; i++){
        var source = Math.floor((Math.random() * (nodes-1)) + 1);
        var target = Math.floor((Math.random() * (nodes-1)) + 1);

        if(source!=target){
            edgeList.push({
                "id": i.toString(),
                "source": source.toString(),
                "target": target.toString()
            });
        }
    }

    var data = {
        "nodes": nodeList,
        "edges": edgeList
    };

    s = new sigma({
        graph: data,
        container: 'sampleGraph',
        settings: {
            defaultNodeColor: '#ec5148',
            drawLabels: false
        }
    });
}

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
        "x": Math.random(),
        "y": Math.random(),
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