var obj = JSON.parse('{"Name":"Minerva","Age":"2 years","Sex":"Female"}');
document.getElementById("demo").innerHTML = obj.Name + ", " + obj.Age +", "+ obj.Sex;

var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        document.getElementById("demo").innerHTML = myObj.name;
    }
};
xmlhttp.open("GET", "json_demo.txt", true);
xmlhttp.send();
