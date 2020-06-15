<?php 
//Standard Query With Multiple Results (Object Version)

$query = $this->db->query('SELECT name, title, email FROM my_table');

foreach ($query->result() as $row)  //or result_array
{
        echo $row->title;  // echo $row['title'];
        echo $row->name;  // ..
        echo $row->email;  // ..
}

echo 'Total Results: ' . $query->num_rows();

// Standard Query With Single Result

$query = $this->db->query('SELECT name FROM my_table LIMIT 1');
$row = $query->row(); // row_array
echo $row->name;  // echo $row['name'];


// Standard Insert

$sql = "INSERT INTO mytable (title, name) VALUES (".$this->db->escape($title).", ".$this->db->escape($name).")";
$this->db->query($sql);
echo $this->db->affected_rows();


//Query Builder Query

$query = $this->db->get('table_name');

foreach ($query->result() as $row)
{
        echo $row->title; //This method returns a single result row. If your query has more than one row, it returns only the first row. The result is returned as an object.
}


// Query Builder Insert

$data = array(
        'title' => $title,
        'name' => $name,
        'date' => $date
);

$this->db->insert('mytable', $data);  // Produces: INSERT INTO mytable (title, name, date) VALUES ('{$title}', '{$name}', '{$date}')



//error
if ( ! $this->db->simple_query('SELECT `example_field` FROM `example_table`'))
{
        $error = $this->db->error(); // Has keys 'code' and 'message'
}

// return num of rows 

$query = $this->db->query('SELECT * FROM my_table');

echo $query->num_rows();

//cut memory 
$query->free_result();  



$query = $this->db->get('mytable');  // Produces: SELECT * FROM mytable
$query = $this->db->get_where('mytable', array('id' => $id), $limit, $offset);
$this->db->select('title, content, date');
$query = $this->db->get('mytable');

// Executes: SELECT title, content, date FROM mytable

$this->db->where('name', $name); // Produces: WHERE name = 'Joe'
//Associative array method:

    $array = array('name' => $name, 'title' => $title, 'status' => $status);
    $this->db->where($array);