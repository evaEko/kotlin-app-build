package forms

fun main(args : Array<String>){
  val root = "/home/eko/repos/lezecka-akademia/"
  val src = root + "src/main/resources/resources/forms/simple/"
  val target = root + "target/forms/simple/"
  
    //get list of php files with forms to generate (will get header and footer):
  val files = arrayOf("simple_application.php", "zoznam.php", "submit_confirmation.php")
  val filesSrcAndTarget = HashMap<String, String>()

  //create map of source path and target path for each file:
    files.forEach {
      filesSrcAndTarget[src + it] = target + it
    }

  //create the file from the source path in the target path:
  filesSrcAndTarget.forEach {
    k,v -> PhpFileAssembler().createPhpFile(k,v)
  }

}
