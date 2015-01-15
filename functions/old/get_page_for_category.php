
<h2>get_page_for_category</h2>
<p class="description">get_page_for_category — returns the parent page as array for a given category id</p>
<h3>Summary</h3>
<pre class="prettyprint"><code class="language-php">get_page_for_category($id);
</code></pre>

<h3>Return Values</h3> 
 <p>
<code>Array</code> with the page data or <code>false</code> if the category is not in a page.</p>



<h3>Usage</h3>
<pre class="prettyprint"><code class="language-php">
//get the category  page
$category_page = get_page_for_category(23);
var_dump($category_page); 

if($category_page != false){
	print $category_page['title'];  
	print $category_page['id'];
	print $category_page['parent'];
	print $category_page['position'];
	print $category_page['created_at']; 
	// and more... print_r($category_page);
}
</code></pre>
<h4>See also</h4>
<?php print page_content('functions/_nav/categories'); ?>