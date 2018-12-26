package forms

import java.io.File
import java.io.InputStream
import java.nio.charset.Charset

class PhpFileAssembler {

  //file used to get the header and footer for php forms:
  private val indexFile: String = "/home/eko/repos/lezecka-akademia/target/sk/about/index.html"

  fun createPhpFile(contentFile: String, outputFile: String) {

    var header: String
    var footer: String
    var form: String

    var indexContent: String = getIndexContent(indexFile)

    header = getHeader(indexContent)
    footer = getFooter(indexContent)
    form = header + getBody(contentFile) + footer


    createFormFile(form, outputFile)
  }

  fun getBody(bodyFile: String): String {
    val file = File(bodyFile)
    var ins: InputStream = file.inputStream()
    return ins.readBytes().toString(Charset.defaultCharset())
  }

  fun getFooter(content: String): String {
    val footerSplit = content.split("<footer class=\"footer\">".toRegex())
    val footer = footerSplit.last()
    return "<footer class=\"footer\">" + footer
  }

  fun getHeader(content: String): String {
    val headerSplit = content.split("</nav>".toRegex())
    return "<?php\nrequire('validation.php')\n?>" + headerSplit[0] + "</nav>\n"
  }

  fun getIndexContent(indexFile: String): String {
    val file = File(indexFile)
    var ins: InputStream = file.inputStream()
    var content = ins.readBytes().toString(Charset.defaultCharset())
    content = content.replace("\n", "")
    return content
  }

  fun createFormFile(content: String, target: String) {

    var file = File(target)
    file.writeText(content)
  }
}
