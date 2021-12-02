jQuery(document).ready(function($) {
    // Set the Options for "Bloodhound" suggestion engine
    var engine = new Bloodhound({
        remote: {
            url: '/find?q=%QUERY%',
            wildcard: '%QUERY%'
        },
        datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
        queryTokenizer: Bloodhound.tokenizers.whitespace
    });
    let inputSearch = $('.search-input');
    inputSearch.tagsinput({
        itemValue: 'id',
        itemText: 'name',
        typeaheadjs: [{
            hint: true,
            highlight: true,
            minLength: 1,
        }, {
            source: engine.ttAdapter(),
            display: 'name', // PUT IT HERE
            // This will be appended to "tt-dataset-" to form the class name of the suggestion menu.
            name: 'ingredientsList',
            displayKey: 'name',
            valueKey: 'name',
            // the key from the array we want to display (name,id,email,etc...)
            templates: {
                empty: [
                    '<div class="list-group search-results-dropdown"><div class="list-group-item">Nothing found.</div></div>'
                ],
                header: [
                    '<div class="list-group search-results-dropdown">'
                ],
                suggestion: function(data) {
                    return '<span class="list-group-item ingredient-button">' + data
                        .name +
                        '</span>'
                }
            }
        }],

    });
    inputSearch.on('itemAdded', function(event) {
        $("#ingredient" + event.item.id).prop('checked', true);

    });
    $('input[name^="ingredient"]').change(function() {
        if (this.checked) {
            let nameI=$(this).parent().children('label').text();
            let idI=$(this).attr('id').replace("ingredient","");
            inputSearch.tagsinput('add', { id: idI, name: nameI });
        }
    });
});