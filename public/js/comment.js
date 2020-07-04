$(function() {
    get_data();
});

function get_data() {
    $.ajax({
        url: "../result/ajax/",
        dataType: "json",
        success: data => {
            $("#comment-data")
            .find(".comment-visible")
            .remove();

            var room_id = Number(document.getElementById('room_id').value);

            for (var i = 0; i < data.comments.length; i++) {
                if(room_id == data.comments[i].room_id){
                    var html = `
                        <div class="media comment-visible">
                            <div class="media-body comment-body">
                                <div class="row">
                                    <span class="comment-body-user" id="name">${data.comments[i].name}</span>
                                    <span class="comment-body-time" id="created_at">${data.comments[i].time}</span>
                                </div>
                                <span class="comment-body-content" id="comment">${data.comments[i].comment}</span>
                            </div>
                        </div>
                    `;
                    $("#comment-data").append(html);
                }else{
                    continue;
                }
            }
        },
        error: () => {
            alert("ajax Error");
        }
    });

    setTimeout("get_data()", 5000);
}
