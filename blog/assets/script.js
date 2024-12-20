 // Setting up variables
const $studentList = $('.student-list').children();
$('.student-list').prepend('<div class="notFound"></div>');
$('.notFound').html(`<span>No results</span>`);
$('.notFound').hide();

// Bulding a list of ten students and displaying them on the page
function showPage(studentList, pageNum = 1){
    const showPerPage = 10;    
    // hide all students on the page
    $(studentList).hide(); 
    
    // Get start/end for each student based on the page number
    const calcStart = (pageNum) => pageNum === 1 ? 0 : (pageNum - 1) * showPerPage;
    const start = calcStart(pageNum);
    const end = pageNum * showPerPage;

    // Looping through all students in studentList
    $(studentList).slice(start,end).each(function(i, li){
        // if student should be on this page number
        // show the student
        $(li).fadeIn(50);
    });
}

// Search component
const searchBar = `
    <div class="student-search">
        <input placeholder="Search for students...">
        <button>Search</button>
    </div>
`;
$('.page-header').append(searchBar);

$('.student-search input').on('keyup', function(){
    const searchQuery = $(this).val();
    const searchResults = searchStudent($('.student-list li'), searchQuery.toUpperCase());
    showPage(searchResults);
    appendPageLinks(searchResults);
});


// Student search
function searchStudent(element, filter){

    $(element).each(function(){         
        if($(this).text().toUpperCase().includes(filter)){
            $(this).show();
        } else {
            $(this).hide();
        }        
    });
    let num = $('.student-item:not([style*="display: none"])').length;
    let searchRes = $('.student-item:not([style*="display: none"])');
    num > 0 ? $('.notFound').hide() : $('.notFound').show();
    return searchRes;
};



// Creating all page links based on a list of students
function appendPageLinks(studentList){
    // determine how many pages for this student list
    totalPageNum = Math.ceil(studentList.length / 10);
    // create a page link section
    const pagination = 'pagination';
    // add a page link to the page link section
    // if class the element already exists
    if($('.pagination').length === 0){
        $('.page').append(`
        <div class="${pagination}">
            <ul></ul>
        </div>
    `);
    } 
 
    // remove the old page link section from the site
    $('.pagination ul').children().remove();

    if (totalPageNum > 1){
        // 'for' every page
        for(let i=0; i<totalPageNum; i++){
            const pageLink = `
                <li>
                    <a href="#">${i + 1}</a>
                </li>
            `;
            // append our new page link section to the site
            $('.pagination ul').append(pageLink);
        }
    }

    $('.pagination ul li').children().first().addClass('active'); 
        
        // define what happens when you click a link (event listener)
        $('.pagination ul').on('click', 'a', function(e){
            e.preventDefault();
            const pgNum = parseInt($(e.target).text());
            // Use showPage() to display the page for the link clicked
            showPage(studentList, pgNum);
            // mark that link as 'active'
            $(this).parent().siblings().children().removeClass('active');
            $(this).addClass('active');
        });
} 

showPage($studentList);
appendPageLinks($studentList);