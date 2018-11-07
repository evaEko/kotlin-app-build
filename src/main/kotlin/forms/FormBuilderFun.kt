package forms

import java.io.BufferedReader
import java.io.File
import java.io.InputStream
import java.nio.charset.Charset
import java.util.regex.Matcher
import java.util.regex.Pattern

fun main(args : Array<String>){
  val root = "/home/eko/repos/lezecka-akademia/src/main/resources/";
  val localRoot = "/home/eko/repos/lezecka-akademia-gradle/"
  val src = root + "static/forms/simple/";
  val target = localRoot + "target/forms/simple/";
  
  
  val filesSrcAndTarget = HashMap<String, String>();
  //list of php files to generate:
  val files = arrayOf("simple_application.php", "zoznam.php", "submit_confirmation.php");
  
  //create map of source path and target path for each file:
    files.forEach {
      filesSrcAndTarget[src+it] = target+it;
  }
  
  //create the file from the source path in the target path:
  filesSrcAndTarget.forEach {
    k,v -> PhpFileAssembler().createPhpFile(k,v)
  }

}
