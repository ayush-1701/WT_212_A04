let url=new URL(location.href).href+"resto.php?req_type=";
$(document).ready(function()
{
    MenuItem();
    $("#resto").change(function()
    {
        Details($("#resto").val());
    });
});
            
function MenuItem()
{
    
        $.get(url+"ProductName",function(data,status)
        {              
            if(status.localeCompare("success")==0)
            {
                for (const key in data) 
                {
                    if (data.hasOwnProperty(key)) 
                    {
                        $("#resto").append("<option value='"+data[key].Id+"'>"+data[key].Name+"</option>");
                        $("#resto").formSelect();
                    }
                }
            }
        });
    
}
            
function Details(product_id)
{
    $.get(url+"ProductDetails&id="+product_id,function(data,status)
    {

        "<table><tbody><tr><td>Short Name:</td><td>"+data.short_name+"</td></tr>"
        
        if(status.localeCompare("success")==0)
        {
            $("#ch").empty();
           /* $("#ch").append("<table><tbody><tr><td>Name:</td><td>" + 
                            data.name + "</td></tr> <tr><td>Short Name:</td><td>" + 
                            data.short_name + "</td></tr> <tr><td>ID:</td><td>" +
                            data.s_name + "</td></tr> <tr><td>Order Code:</td><td>" +
                            data.id + "</td></tr> <tr><td>Description:</b></td><td>" +
                            data.description + "</td></tr> <tr><td>Half Plate:</td><td>" +
                            data.price_small + "</td></tr> <tr><td>Full Plate:</td><td>" +
                            data.price_large + "</td></tr> </tbody></table>")

*/


         $("#ch").append("<h4>Description:</h5><table><tbody><tr><td><b>Short Name:</b></td><td>"+
                data.short_name+"</td></tr><tr><td><b>Name:</b></td><td>"+
                data.name+"</td></tr><tr><td><b>Description:</b></td><td>"+
                data.description+"</td></tr><tr><td><b>Price:</b></td><td><u><strong>Small:</strong></u>&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-size:14px; font-weight:bold;margin-right:4px;'>&#8377;</span>"+
                data.price_small+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u><strong>Large:</strong></u>&nbsp;&nbsp;&nbsp;&nbsp;<span style='font-size:14px; font-weight:bold;margin-right:4px;'>&#8377;</span>"+
                data.price_large+"</td></tr></tbody></table>");

        }
    });
}