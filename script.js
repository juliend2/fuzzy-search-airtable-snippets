var Airtable = require('airtable');
var base = new Airtable({ apiKey: 'keyCsBLjL1cwYff47' }).base('appGe0W4WVOEGimlm');

var found = []
const options = {
    includeScore: true,
    keys: ['name', 'snippet', 'techs']
}

function searchSomething(fuzzySearch) {
    return new Promise(resolve => {
        if (found.length == 0) {
            base('snippets').select({
                // Selecting the first 3 records in Grid view:
                maxRecords: 1000,
                view: "Grid view",
                fields: ["Name", "Snippet", "techs"]
            }).eachPage(function page(records, fetchNextPage) {
                // This function (`page`) will get called for each page of records.
                i = 1
                records.forEach(function (record) {
                    found.push({
                        name: record.get('Name'),
                        snippet: record.get('Snippet'),
                        techs: record.get('techs')
                    })
                    // console.log('Retrieved', record.get('Name'), record.get('Snippet'), record.get('techs'));
                    i += 1
                });
                // console.log(i)

                // To fetch the next page of records, call `fetchNextPage`.
                // If there are more records, `page` will get called again.
                // If there are no more records, `done` will get called.
                fetchNextPage();

            }, function done(err) {
                if (err) { console.error(err); return; }
                const fuse = new Fuse(found, options)
                const result = fuse.search(fuzzySearch)
                resolve(result)
            });
        } else {
            const fuse = new Fuse(found, options)
            const result = fuse.search(fuzzySearch)
            resolve(result)
        }
    })
    
}