<?php 
class Excel_model extends CI_model{
    public function get(){


    $filename='test';
    $filetitle='title';
    if($_POST){
        set_time_limit(10000);
        $title = '';
        ini_set('memory_limit','300M');
        header('Content-Type: application/vnd.ms-excel;charset=utf-8');
        $name = $title.".xls";
        header('Content-Disposition: attachment;filename='.$name.'');
        header('Cache-Control: max-age=0');
        $where = "1=1";
        $sql = "select * from paiqianku";
        $query = $this->db->query($sql);
        // PHP文件句柄，php://output 表示直接输出到浏览器 
        $fp = fopen('php://output', 'a');
        // 输出Excel列头信息 
        $head = array('ID');
        //字符替换
        $p_new_lines = array("\r\n", "\n","\t","\r","\r\n", "<pre>","</pre>","<br>","</br>","<br/>");
        $p_change_line_in_excel_cell = '';

        foreach($head as $v){
            echo iconv('utf-8','gb2312',$v) . "\t";
        }
        echo "\n";
        // 计数器 
        $cnt = 0;
        // 每隔$limit行，刷新一下输出buffer，节约资源 
        $limit = 100000;
        // 逐行取出数据，节约内存
        while ($res = mysql_fetch_assoc($query)) {
            $cnt ++;
            if ($limit == $cnt) { //刷新一下输出buffer，防止由于数据过多造成问题 
                ob_flush();
                flush();
                $cnt = 0;
            }  
            echo  trim($res['id']). "\t";
            echo "\n";
        }

    }
    }}
    ?>