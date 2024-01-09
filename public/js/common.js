/**
 *  action for call api with GET method like list, search, detail,...
 * @param api
 * @param data
 * @param nextAction
 */
function getData(api, data, nextAction) {
    $.ajax({
        url: api,
        type: 'GET',
        data: {
            data
        },
        success: function (response) {
            nextAction(response);
        },
        error: function (request, error) {
            errorFunction(request);
        }
    });
}

/**
 * action for call api with POST method like create, update, delete,...
 * @param api
 * @param data
 * @param nextAction
 */
function createOrUpdate(api, data, nextAction) {
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: api,
        type: 'POST',
        data: data,
        success: function (response) {
            nextAction(response);
        },
        error: function (error) {
            console.log(error)
        }
    });
}
