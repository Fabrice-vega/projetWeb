<?xml version="1.0" encoding="iso-8859-1"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

    <xsl:template match="/">

        <html>

            <head>
               <link rel="stylesheet" type="text/css" href="xml.css"/>
            </head>

            <body>
                <table class="table table-dark table-striped">

                    <thead>
                        <th scope="col">id</th>
                        <th scope="col">Pays</th>
                        <th scope="col">Ville</th>
                        <th scope="col">Image</th>
                    </thead>

                    <tbody>
                        <xsl:for-each select="voyages/voyage">
                            <xsl:sort select="id"/>
                            <tr>
                                <td class="text-color center">
                                    <xsl:value-of select="id"/>
                                </td>
                                <td class="text-color center">
                                    <xsl:value-of select="pays"/>
                                </td>
                                <td class="text-color center">
                                    <xsl:value-of select="ville"/>
                                </td>
                                <xsl:choose>
                                    <xsl:when test="image != ''">
                                        <td class="text-color center">
                                            <xsl:value-of select="image"/>
                                        </td>
                                    </xsl:when>
                                    <xsl:otherwise>
                                        <td class="text-color center">
                                            Inexistant
                                        </td>
                                    </xsl:otherwise>
                                </xsl:choose>
                            </tr>
                        </xsl:for-each>
                    </tbody>

                </table>
            </body>

        </html>

    </xsl:template>

</xsl:stylesheet>
