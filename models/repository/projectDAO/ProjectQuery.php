<?php
class ProjectQuery
{

    const SELECT_BY_ID = "SELECT * FROM project WHERE id = '%s'";
    const SELECT_BY_NAME = "SELECT * FROM project WHERE name = '%s'";
    const SELECT_BY_STATUS = "SELECT * FROM project WHERE completed = '%s'";
    const SELECT_BY_BRANCH = "SELECT * FROM project WHERE branch_id = '%s'";
    const INSERT = "INSERT INTO project (name, completed, branch_id, point, curriculum, faculty, presentation_day) VALUE('%s', '%s', '%s', '%f', '%s', '%s','%s')";
    const SELECT_ALL = "SELECT * FROM project";


    const COUNT_ROW_NUM = "SELECT COUNT(*) AS row_num FROM project";
    const SELECT_PROJECT = "SELECT * FROM project WHERE '%s'";
	const INSERT_PROJECT = "INSERT INTO project(name, completed, branch_id, result, point) VALUES ('%s','%s','%s','%s','%s')";
	const UPDATE_PROJECT = "UPDATE project SET id ='%s',name= '%s' ,completed= '%s',branch_id= '%s',result= '%s',point= '%s'  WHERE '%s'";
	const DELETE_PROJECT = "DELETE FROM project WHERE '%s'";
}
