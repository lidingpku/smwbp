<?php
/*  Copyright 2007, ontoprise GmbH
*  This file is part of the halo-Extension.
*
*   The halo-Extension is free software; you can redistribute it and/or modify
*   it under the terms of the GNU General Public License as published by
*   the Free Software Foundation; either version 3 of the License, or
*   (at your option) any later version.
*
*   The halo-Extension is distributed in the hope that it will be useful,
*   but WITHOUT ANY WARRANTY; without even the implied warranty of
*   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*   GNU General Public License for more details.
*
*   You should have received a copy of the GNU General Public License
*   along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
/**
 * @author Markus Krötzsch
 */

global $smwgHaloIP;
include_once($smwgHaloIP . '/languages/SMW_HaloLanguage.php');

class SMW_HaloLanguageDe extends SMW_HaloLanguage {

protected $smwContentMessages = array(
    
    'smw_derived_property'  => 'Das ist ein abgeleitetes Property.',
    'smw_sparql_disabled'=> 'Keine SPARQL-Unterstützung aktiviert.',
	'smw_viewinOB' => 'Im Ontology-Browser öffnen',
    'smw_wysiwyg' => 'WYSIWYG',

	'smw_att_head' => 'Attribute',
	'smw_rel_head' => 'Relationen zu anderen Seiten',
	'smw_spec_head' => 'Spezielle Eigenschaften',
	'smw_predefined_props' => 'Das ist das vordefinierte Attribut "$1"',
	'smw_predefined_cats' => 'Das ist die vordefinierte Kategorie "$1"',

	'smw_noattribspecial' => 'Die spezielle Eigenschaft „$1“ ist kein Attribut (bitte „::“ anstelle von „:=“ verwenden).',
	'smw_notype' => 'Dem Attribut wurde kein Datentyp zugewiesen.',

	/*Messages for Autocompletion*/
	'tog-autotriggering' => 'Automatische auto-completion',

	// Messages for SI unit parsing
	'smw_no_si_unit' => 'Einheit nicht in SI-Representation. ',
	'smw_too_many_slashes' => 'Zu viele Slashes in SI-Representation. ',
	'smw_too_many_asterisks' => '"$1" contains several *\'s in sequence. ',
	'smw_denominator_is_1' => "The denominator must not be 1.",
	'smw_no_si_unit_remains' => "There remains no SI unit after optimization.",
	'smw_invalid_format_of_si_unit' => 'Invalid format of SI unit: $1 ',
	// Messages for the chemistry parsers
	'smw_not_a_chem_element' => '"$1" is not a chemical element.',
	'smw_no_molecule' => 'There is no molecule in the chemical formula "$1".',
	'smw_chem_unmatched_brackets' => 'The number of opening brackets does not match the closing ones in "$1".',
	'smw_chem_syntax_error' => 'Syntax error in chemical formula "$1".',
	'smw_no_chemical_equation' => '"$1" is not a chemical equation.',
	'smw_no_alternating_formula' => 'There is a missing or needless operator in "$1".',
	'smw_too_many_elems_for_isotope' => 'Only one element can be given for an isotope. A molecule was provided instead: "$1".',
	// Messages for attribute pages
	'smw_attribute_has_type' => 'This attribute has the datatype ',
	// Messages for help
	'smw_help_askown' => 'Ask your own question',
	'smw_help_askownttip' => 'Add your own question to the wiki helppages where it can be answered by other users',
	'smw_help_pageexists' => "This question is already in our helpsystem.\nClick 'more' to see all questions.",
	'smw_help_error' => "Oops. An error seems to have occured.\nYour question could not be added to the system. Sorry.",
	'smw_help_question_added' => "Your question has been added to our help system\nand can now be answered by other wiki users."

);

protected $smwUserMessages = array(
    'specialpages-group-smwplus_group' => 'Semantic Mediawiki+',
	'smw_devel_warning' => 'Diese Funktion befindet sich zur Zeit in Entwicklung und ist eventuell noch nicht voll einsatzfähig. Eventuell ist es ratsam, den Inhalt des Wikis vor der Benutzung dieser Funktion zu sichern.',

	'smw_relation_header' => 'Seiten mit der Relation „$1“',
	
	'smw_subproperty_header' => 'Sub-Attribute von "$1"',
	'smw_subpropertyarticlecount' => '<p>Zeige $1 Sub-Attribute.</p>',
	
	/*Messages for category pages*/
	'smw_category_schemainfo' => 'Schema-Information für Kategorie "$1"',
	'smw_category_properties' => 'Attribute',
	'smw_category_properties_range' => 'Attribute mit Range: "$1"',
	
	'smw_category_askforallinstances' => 'Frag nach allen direkten und indirekten Instanzen von "$1"',
	'smw_category_queries' => 'Queries für Kategorien',
	
	'smw_category_nrna' => 'Seiten mit falsch zugewiesener Domäne "$1".',
	'smw_category_nrna_expl' => 'Diese Seite hat eine Domäne, ist aber kein Attribut',
	'smw_category_nrna_range' => 'Seiten mit falsch zugewiesener Range "$1".',
	'smw_category_nrna_range_expl' => 'Diese Seite hat eine Range, ist aber kein Attribut',
	
	'smw_exportrdf_all' => 'Exportiere alle semantischen Daten',
	
	/*Messages for Search Triple Special*/
	'searchtriple' => 'Einfache semantische Suche', //name of this special
	'smw_searchtriple_header' => '<h1>Suche nach Relationen und Attributen</h1>',
	'smw_searchtriple_docu' => "<p>Benutzen Sie die Eingabemaske um nach Seiten mit bestimmten Eigenschaften zu suchen. Die obere Zeile dient der Suche nach Relationen, die untere der Suche nach Attributen. Sie können beliebige Felder leer lassen, um nach allen möglichen Belegungen zu suchen. Lediglich bei der Eingabe von Attributwerten (mit den entsprechenden Maßeinheiten) verlangt die Angabe des gewünschten Attributes.</p>\n\n<p>Beachten Sie, dass es zwei Suchknöpfe gibt. Bei Druck der Eingabetaste wird vielleicht nicht die gewünschte Suche durchgeführt.</p>",
	'smw_searchtriple_subject' => 'Seitenname (Subjekt):',
	'smw_searchtriple_relation' => 'Name der Relation:',
	'smw_searchtriple_attribute' => 'Name des Attributs:',
	'smw_searchtriple_object' => 'Seintenname (Objekt):',
	'smw_searchtriple_attvalue' => 'Wert des Attributs:',
	'smw_searchtriple_searchrel' => 'Suche nach Relationen',
	'smw_searchtriple_searchatt' => 'Suche nach Attributen',
	'smw_searchtriple_resultrel' => 'Suchergebnisse (Relationen)',
	'smw_searchtriple_resultatt' => 'Suchergebnisse (Attribute)',
	/*Messages for Relation Special*/
	'relations' => 'Relationen',
	'smw_relations_docu' => 'In diesem Wiki gibt es die folgenden Relationen:',
	/*Messages for WantedRelations*/
	'wantedrelations' => 'Gewünschte Relationen',
	'smw_wanted_relations' => 'Folgende Relationen haben bisher keine erläuterende Seite, obwohl sie bereits für die Beschreibung anderer Seiten verwendet werden.',
	/*Messages for Attribute Special*/
	'properties' => 'Attribute',
	'smw_properties_docu' => 'In diesem Wiki gibt es die folgenden Attribute:',
	'smw_attr_type_join' => ' mit $1',
	'smw_properties_sortalpha' => 'Sortiere alphabetisch',
	'smw_properties_sortmoddate' => 'Sortiere nach Änderungsdatum',
	'smw_properties_sorttyperange' => 'Sortiere nach Typ/Range',

	'smw_properties_sortdatatype' => 'Datatype properties',
	'smw_properties_sortwikipage' => 'Wikipage properties',
	'smw_properties_sortnary' => 'N-ary properties',
	/*Messages for Unused Relations Special*/
	'unusedrelations' => 'Verwaiste Relationen',
	'smw_unusedrelations_docu' => 'Die folgenden Relationenseiten existieren, obwohl sie nicht verwendet werden.',
	/*Messages for Unused Attributes Special*/
	'unusedattributes' => 'Verwaiste Attribute',
	'smw_unusedattributes_docu' => 'Die folgenden Attributseiten existieren, obwohl sie nicht verwendet werden.',

	/*Messages for OntologyBrowser*/
	'ontologybrowser' => 'OntologyBrowser',
	'smw_ac_hint' => 'Drücken Sie Ctrl+Alt+Space für die Auto-Vervollständigung. (Ctrl+Space im IE)',
	'smw_ob_categoryTree' => 'Kategorie-Baum',
	'smw_ob_attributeTree' => 'Attribut-Baum',

	'smw_ob_instanceList' => 'Instanzen',
	'smw_ob_rel' => 'Relationen',
	'smw_ob_att' => 'Attribute',
	'smw_ob_relattValues' => 'Werte',
	'smw_ob_relattRangeType' => 'Wertebereich',
	'smw_ob_filter' => 'Filter',
	'smw_ob_filterbrowsing' => 'Filtere',
	'smw_ob_reset' => 'Zurücksetzen',
	'smw_ob_cardinality' => 'Kardinalität',
	'smw_ob_transsym' => 'Transitivität/Symmetrie',
	'smw_ob_footer' => '',
	'smw_ob_no_categories' => 'Keine Kategorien verfügbar.',
	'smw_ob_no_instances' => 'Keine Instanzen verfügbar.',
	'smw_ob_no_attributes' => 'Keine Attribute verfügbar.',
	'smw_ob_no_relations' => 'Keine Relationen verfügbar.',
	'smw_ob_no_annotations' => 'Keine Annotation verfügbar.',
	'smw_ob_no_properties' => 'Keine Attribute verfügbar.',
	'smw_ob_help' => 'Der Ontology-Browser hilft ihnen sich im Wiki zurechtzufinden, das Schema zu untersuchen und ganz allgemein Seiten zu finden.
			Benutzen Sie den Filter-Mechanismus oben links um bestimmte Elemente der Ontologie zu finden und schränken sie das Ergebnis mit Hilfe der
			Filter unter jeder Spalte ein. Der Selektionsfluss ist anfangs von rechts nach links. Sie können die Pfeile durch Anklicken aber umdrehen.',

	'smw_ob_undefined_type' => '*undefinierter Typ*',
	'smw_ob_hideinstances' => 'Verstecke Instanzen',
	
	'smw_ob_hasnumofsubcategories' => 'Anzahl Unterkategorien',
	'smw_ob_hasnumofinstances' => 'Anzahl Instanzen',
	'smw_ob_hasnumofproperties' => 'Anzahl Attribute',
	'smw_ob_hasnumofpropusages' => 'Attribut wurd $1-mal annotiert.',
	'smw_ob_hasnumoftargets' => 'Instanz wurde $1-mal verlinkt.',
	'smw_ob_hasnumoftempuages' => 'Template wurde $1-mal benutzt.',
	
	/* Commands for ontology browser */
	'smw_ob_cmd_createsubcategory' => 'Subkategorie hinzufügen',
	'smw_ob_cmd_createsubcategorysamelevel' => 'Subkategorie auf gleicher Ebene hinzufügen',
	'smw_ob_cmd_renamecategory' => 'Umbenennen',
	'smw_ob_cmd_createsubproperty' => 'Subproperty hinzufügen',
	'smw_ob_cmd_createsubpropertysamelevel' => 'Subproperty auf gleicher Ebene hinzufügen',
	'smw_ob_cmd_renameproperty' => 'Umbenennen',
	'smw_ob_cmd_renameinstance' => 'Instanz umbenennen',
	'smw_ob_cmd_deleteinstance' => 'Instanz löschen',
	'smw_ob_cmd_addpropertytodomain' => 'Attribut hinzufügen zur Kategorie: ',
	
	
	/* Messages for Gardening */
	'gardening' => 'Gardening', // name of special page 'Gardening'
	'gardeninglog' => 'GardeningLog', // name of special page 'GardeningLog'
	'smw_gard_param_replaceredirects' => 'Ersetze Redirects',
	'smw_gardening_log_cat' => 'GardeningLog',
	'smw_gardeninglogs_docu' => 'Diese Seite ermöglicht den Zugriff auf die Gardening Logs.',
	'smw_gardening_log_exp' => 'Das ist die Gardening Log Kategorie.',
	'smw_gardeninglog_link' => 'Suchen Sie auch auf $1 für weitere Logging-Einträge.',
	'smw_gard_welcome' => 'Das ist der Gardening-Werkzeugkasten. Er enthält einige Werkzeuge, mit deren Hilfe Sie das Wiki sauber und konsistent halten können.',
	'smw_gard_notools' => 'Wenn Sie hier keine Werkzeuge angezeigt bekommen, sind Sie entweder nicht eingeloggt oder haben nicht das Recht Gardening-Werkzeuge zu benutzen.',
	'smw_no_gard_log' => 'Kein Gardening-Log vorhanden',
	'smw_gard_abortbot' => 'Bot beenden',
	'smw_gard_unknown_bot' => 'Unbekannter Gardening-Bot',
	'smw_gard_no_permission' => 'Sie haben nicht das Recht diesen Bot zu benutzen.',
	'smw_gard_missing_parameter' => 'Fehlender Parameter',
	'smw_gard_missing_selection' => 'Bitte etwas ausw�hlen',
	'smw_unknown_value' => 'Unbekannter Wert',
	'smw_out_of_range' => 'Außerhalb des Wertebereichs',
	'smw_gard_value_not_numeric' => 'Wert muss eine Zahl sein',
	'smw_gard_choose_bot' => 'Wähle Sie ein Werkzeug auf der linken Seite aus.',
	'smw_templatematerializerbot' => 'Materialisiere semantischen Inhalt der Templates',
	'smw_consistencybot' => 'Untersuche Konsistenz des Wikis',
	'smw_similaritybot' => 'Finde ähnliche Elemente',
	'smw_undefinedentitiesbot' => 'Finde undefinierte Elemente',
	'smw_missingannotationsbot' => 'Finde Seiten ohne Annotationen',
	'smw_anomaliesbot' => 'Finde Anomalien',
	'smw_renamingbot' => 'Benenne Seiten um',
	'smw_importontologybot' => 'Importiere eine Ontologie',
	'smw_gardissue_class_all' => 'Alle',
	'smw_termimportbot' => 'Begriffe aus einem Vokabular importieren',

	'smw_gard_import_choosefile' => 'Die folgenden $1-Dateien sind auf dem Server verf�gbar.',
	'smw_gard_import_addfiles' => 'Weitere $2-Dateien k�nnen �ber $1 hinzugef�gt werden.',
	'smw_gard_import_nofiles' => 'Keine Dateien des Typs $1 auf dem Server verf�gbar.',
	'smw_gard_issue_local' => 'dieser Artikel',
	
	/* Messages for Gardening Bot: ConsistencyBot */
	'smw_gard_consistency_docu'  => 'Der Konsistenz-Bot prüft auf Zyklen in der Taxonomie und finden Attribute ohne Domäne und Wertebereich. Er prüft außerdem die korrekte Verwendung eines Attribute auf der Instanz-Ebene.',
	'smw_gardissue_domains_not_covariant' => 'Domäne $2 von $1 muss eine Subkategorie der Domäne des Super-Attribute sein.',
	'smw_gardissue_domains_not_defined' => 'Domäne von $1 ist nicht definiert.',
	'smw_gardissue_ranges_not_covariant' => 'Wertebereichskategorie $2 von $1 muss eine Subkategorie der Wertebereichskategorie des Super-Attribute sein.',
	'smw_gardissue_ranges_not_defined' => 'Wertebereichskategorie von $1 ist nicht definiert.',
	'smw_gardissue_domains_and_ranges_not_defined' => 'Please define the domain and/or range of $1.',
	'smw_gardissue_types_not_covariant' => 'Typ von $1 muss gleich dem Typ des Super-Attribute sein.',
	'smw_gardissue_types_not_defined' => 'Typ von $1 ist nicht definiert. Typ Wikipage intendiert? Bitte explizit machen.',
	'smw_gardissue_double_type' => 'Mehr als ein Typ definiert.',
	'smw_gardissue_mincard_not_covariant' => 'Minimale Kardinalität von $1 ist geringer als im Super-Attribut definiert.',
	'smw_gardissue_maxcard_not_covariant' => 'Maximale Kardinalität von $1 ist höher als im Super-Attribut definiert.',
	'smw_gardissue_maxcard_not_null' => 'Maximale Kardinalität von $1 darf nicht 0 sein.',
	'smw_gardissue_mincard_below_null' => 'Mininamle Kardinalität von $1 darf nicht kleiner 0 sein.',
	'smw_gardissue_symetry_not_covariant1' => 'Super-Attribut von $1 muss auch symmetrisch sein.',
	'smw_gardissue_symetry_not_covariant2' => 'Attribut $1 muss auch symmetrisch sein.',
	'smw_gardissue_transitivity_not_covariant1' => 'Super-Attribut von $1 muss auch transitiv sein.',
	'smw_gardissue_transitivity_not_covariant2' => 'Attribut $1 muss auch transitiv sein.',
	'smw_gardissue_double_max_card' => 'Warnung: Mehr als ein Attribut "maximale Kardinaltät" $1 gefunden. Benutze nur ersten Wert, nämlich $2.',
	'smw_gardissue_double_min_card' => 'Warnung: Mehr als ein Attribut "minimale Kardinaltät" $1 gefunden. Benutze nur ersten Wert, nämlich $2.',
	'smw_gardissue_wrong_mincard_value' => 'Warnung: Min-Kardinaltät of $1 hat falschen Wert. Wird interpretiert als 0.',
	'smw_gardissue_wrong_maxcard_value' => 'Warnung: Max-Kardinaltät of $1 hat falschen Wert. Muss eine positive Ganzzahl or * sein (unendlich). Wird interpretiert als 0.',
	'smw_gard_issue_missing_param' => 'Warnung: Fehlender Parameter $3 in n-ärem Attribut $2 in Artikel $1.',

	'smw_gard_issue_domain_not_range' => 'Domäne von $1 passt nicht zur Wertbereichskategorie von $2.',
	'smw_gardissue_wrong_target_value' => '$1 benutzt Attribut $2 mit einer Instanz der falschen Kategorie: $3.',
	'smw_gardissue_wrong_domain_value' => '$1 ist Element der falschen Kategorie, wenn es mit Attribut $2 benutzt wird.',
	'smw_gardissue_too_low_card' => '$1 benutzt Attribut $2 (oder eines seiner Subproperties) $3-mal zu wenig.',
    'smw_gardissue_missing_annotations' => 'Fehlende Annotationen. $1 benutzt Attribut $2 (oder eines seiner Subproperties) $3-mal zu wenig.',
	'smw_gardissue_too_high_card' => '$1 benutzt Attribut $2 (oder eines seiner Subproperties) $3-mal zu häufig.',
	'smw_gardissue_wrong_unit' => '$1 benutzt Attribut $2 mit falches Einheit $3.',
	'smw_gard_no_errors' => 'Gratulation! Das Wiki ist konsistent.',
	'smw_gard_issue_incompatible_entity' => 'Der Artikel $1 ist inkompatibel zu $2.',
	'smw_gard_issue_incompatible_type' => 'Das Attribut $1 hat einen inkompatiblen Typ zum Attribut $2.',
	'smw_gard_issue_incompatible_supertypes' => 'Das Attribut $1 hat Superproperties mit inkomptiblen Typen.',
	
	'smw_gard_issue_cycle' => 'Zyklus bei: $1',
	'smw_gard_issue_contains_further_problems' => 'Enthält weitere Probleme',
	
	'smw_gardissue_class_covariance' => 'Covariance Probleme',
	'smw_gardissue_class_undefined' => 'Invollständiges Schema',
	'smw_gardissue_class_missdouble' => 'Doubletten',
	'smw_gardissue_class_wrongvalue' => 'Falsche/Fehlende Werte',
	'smw_gardissue_class_incomp' => 'Inkompatible Entities',
	'smw_gardissue_class_cycles' => 'Zyklen',
	
	/* SimilarityBot*/
	'smw_gard_degreeofsimilarity' => 'Limit der Editierdistanz',
	'smw_gard_similarityscore' => 'Ähnlichkeitspunktzahl',
	'smw_gard_limitofresults' => 'max. Anzahl der Ergebnisse',
	'smw_gard_limitofsim' => 'Zeige nur Element die ähnlich sind zu',
	'smw_gard_similarityterm' => 'Suche nur nach Element die ähnlich zu diesem Term sind (kann weggelassen werden)',
	'smw_gard_similaritybothelp' => 'Diese Bot findet Elemente der Knowledgebase, die möglicherweise redundant sein und vereinigt werden können. Wenn Sie einen Term eingeben wird das System Elemente suchen, die ihm ähnlich sind. Wenn Sie keinen Term eingeben versucht das System alle potentiellen Redundanzen zu finden.',
	
	'smw_gardissue_similar_schema_entity' => '$1 and $2 sind sich ähnlich.',
	'smw_gardissue_similar_annotation' => '$1 von Artikel $2 könnte fälschlicherweise als Annotation von $3 gemeint sein.',
	'smw_gardissue_similar_term' => '$1 ist ähnlich zum Term $2',
	'smw_gardissue_share_categories' => '$1 und $2 sind Element derselben Kategorie(n): $3',
	'smw_gardissue_share_domains' => '$1 und $2 sind Element derselben Domäne(n): $3',
	'smw_gardissue_share_ranges' =>  '$1 und $2 sind Element derselben Zielkategorie: $3',
	'smw_gardissue_share_types' => '$1 und $2 haben den gleichen Typ: $3',
	'smw_gardissue_distinctby_prefix' => '$1 und $2 unterscheiden sich durch ein gemeinsames Präfix/Suffix.',

	'smw_gardissue_class_similarschema' => 'Ähnliche Schema Elemente',
	'smw_gardissue_class_similarannotations' => 'Ähnliche Annotationen',
	/*Undefined entities bot */
	'smw_gard_undefinedentities_docu' => 'Dieser Bot sucht nach Kategorien und Attribute im Wiki, die zwar an irgendeiner Stelle verwendet wurden, aber nie definiert. Des weiteren findet er Instanzen ohne Kateogorien.',
	'smw_gard_remove_undefined_categories' => 'Entferne Annotation undefinierter Kategorien',
	
	'smw_gardissue_property_undefined' => '$1 wird benutzt auf: $2',
	'smw_gardissue_category_undefined' => '$1 wird benutzt auf: $2',
	'smw_gardissue_relationtarget_undefined' => '$1 undefiniert und benutzt mit: $2',
	'smw_gardissue_instance_without_cat' => '$1',
	
	'smw_gardissue_class_undef_categories' => 'Undefinierte Kategorien',
	'smw_gardissue_class_undef_properties' => 'Undefinierte Attribute',
	'smw_gardissue_class_undef_relationtargets' => 'Undefinierte Relationsziele',
	'smw_gardissue_class_instances_without_cat' => 'Instanzen ohne Kategorie',

	/* Missing annotations */
	'smw_gard_missingannot_docu' => 'Dieser Bot identifiziert Seiten im Wiki, die noch nicht annotiert wurden.',
	'smw_gard_missingannot_titlecontaining' => '(Optional) Nur Seiten deren Titel folgendes enthält',
	'smw_gard_missingannot_restricttocategory' => 'Nur unterhalb folgender Kategorien suchen',
	'smw_gardissue_notannotated_page' => '$1 hat keine Annotationen',
	/* Anomalies */
	'smw_gard_anomaly_checknumbersubcat' => 'Überprüfe Anzahl der Subkategorien',
	'smw_gard_anomaly_checkcatleaves' => 'Prüfe auf Kategorie-Blätter',
	'smw_gard_anomaly_restrictcat' => 'Nur unterhalb der Kategorie(n)',
	'smw_gard_anomaly_deletecatleaves' => 'Lösche Kategorie-Blätter',
	'smw_gard_anomaly_docu' => 'Dieser Bot identifiziert Anomalien im semantischen Modell. Anomalien sind derzeit: Kategorien-Blätter (Kategorien, die weder Subkategorien noch Instanzen enthalten), sowie ungewühnliche Anzahlen von Subkategorien (Kateogorien mit nur einer oder mehr als 8 Subkategorien).',
	'smw_gard_anomalylog' => 'Folgende Anomalien konnten im Wiki gefunden werden.',
	
	'smw_gard_all_category_leaves_deleted' => 'Alle Kategorie-Blätter wurden gelöscht.',
	'smw_gard_was_leaf_of' => 'war Blattkategorie von',
	'smw_gard_category_leaf_deleted' => '$1 war ein Kategorie-Blatt. Entfernt vom Anomalie-Bot.',
	'smw_gardissue_category_leaf' => '$1 ist ein Kategorie-Blatt.',
	'smw_gardissue_subcategory_anomaly' => '$1 hat $2 Subkategorien.',
	
	'smw_gardissue_class_category_leaves' => 'Kategorie-Blätter',
	'smw_gardissue_class_number_anomalies' => 'Subkategorie Anomalien',
	

	/* Combined Search*/
	'smw_combined_search' => 'Combined Search',
	'smw_cs_entities_found' => 'Die folgenden Elemente wurden in der Ontologie gefunden:',
	'smw_cs_attributevalues_found' => 'Die folgenden Instanzen enthalten Attribut-Werte die ihrer Suche entsprechen.',
	'smw_cs_aksfor_allinstances_with_annotation' => 'Frage nach allen Instanzen von \'$1\' die einen Annoatation von \'$2\' haben.',
	'smw_cs_askfor_foundproperties_and_values' => 'Frage Instanz \'$1\' nach allen gefunden Attribute.',
	'smw_cs_ask'=> 'Zeige',
	'smw_cs_noresults' => 'Kein Element der Ontologie entspricht ihren Suchwörtern',
	'smw_cs_searchforattributevalues' => 'Suche nach Attributwerten, die ihren Suchwörtern entsprechen',
	'smw_cs_instances' => 'Artikel',
	'smw_cs_properties' => 'Attribute',
	'smw_cs_values' => 'Werte',
	'smw_cs_openpage' => 'Öffne Seite',
	'smw_cs_openpage_in_ob' => 'Öffne Seite im Ontology Browser',
	'smw_cs_openpage_in_editmode' => 'Editiere Seite',
	'smw_cs_no_triples_found' => 'Keine Tripel gefunden!',

	'smw_autogen_mail' => 'Das ist eine automatisch generierte E-Mail. Nicht antworten!',

	/*Message for ImportOntologyBot*/
	'smw_gard_import_docu' => 'Importiert eine OWL-Datei.',
	
	/*Message for ExportOntologyBot*/
	'smw_exportontologybot' => 'Exportiere Ontologie',	
	'smw_gard_export_docu' => 'Dieser Bot exportiert die Wiki-Ontologie im OWL-Format.',
	'smw_gard_export_enterpath' => 'Exportdatei/-pfad',
	'smw_gard_export_onlyschema' => 'Exportiere nur das Schema',
	'smw_gard_export_ns' => 'Exportiere in Namensraum',
	'smw_gard_export_download' => 'Der Export war erfolgreich! Klicke $1 um den Wiki-Export als OWL-Datei herunterzuladen.',
	'smw_gard_export_here' => 'hier',

	/*Message for TemplateMaterializerBot*/
	'smw_gard_templatemat_docu' => 'Dieser Bot aktualisiert alle Seiten, die Templates verwenden welche seit der letzten Materialisierung geändert wurden. Dies ist notwendig damit ASK-Queries in allen Fällen korrekte Ergebnisse liefern.',
	'smw_gard_templatemat_applytotouched' => 'Nur geänderte Tempates berücksichtigen',
	'smw_gardissue_updatearticle' => 'Artikel $1 wurde neu geparst.',

	/* Messages for the TermImportBot */
	'smw_gard_termimportbothelp' => 'Dieser Bot importiert ein externes Vokabular.',

	/*Messages for ContextSensitiveHelp*/
	'contextsensitivehelp' => 'Kontext Sensitive Hilfe',
	'smw_contextsensitivehelp' => 'Kontext Sensitive Hilfe',
	'smw_csh_newquestion' => 'Dies ist eine neue Hilfeseite. Klicken Sie, um sie zu beantworten!',
	'smw_csh_nohelp' => 'Dem System wurden noch keine relevanten Hilfeseiten hinzugefügt.',
	'smw_csh_refine_search_info' => 'Sie k&ouml;nnen Ihre Suche nach Hilfe durch die Angabe eines Seitentyps und/oder einer Aktion weiter verfeinern:',
	'smw_csh_page_type' => 'Typ der Seite',
	'smw_csh_action' => 'Aktion',
	'smw_csh_ns_main' => 'Main (Standard Wikiartikel)',
	'smw_csh_all' => 'ALLE',
	'smw_csh_search_special_help' => 'Sie k&ouml;nnen auch nach Hilfe zu bestimmten Funktionen des Wikis suchen:',
	'smw_csh_show_special_help' => 'Suche nach Hilfe &uuml;ber:',
	'smw_csh_categories' => 'Kategorien',
	'smw_csh_properties' => 'Attribute',
	'smw_csh_mediawiki' => 'MediaWiki Hilfe',
	/* Messages for the CSH discourse state. Do NOT edit or translate these
	 * otherwise CSH will NOT work correctly anymore
	 */
	'smw_csh_ds_ontologybrowser' => 'OntologyBrowser',
	'smw_csh_ds_queryinterface' => 'QueryInterface',
	'smw_csh_ds_combinedsearch' => 'Search',

	/*Messages for Query Interface*/
	'queryinterface' => 'Query Interface',
	'smw_queryinterface' => 'Query Interface',
	'smw_qi_add_category' => 'Kategorie hinzuf&uuml;gen',
	'smw_qi_add_instance' => 'Instanz hinzuf&uuml;gen',
	'smw_qi_add_property' => 'Attribut hinzuf&uuml;gen',
	'smw_qi_add' => 'Hinzuf&uuml;gen',
	'smw_qi_confirm' => 'OK',
	'smw_qi_cancel' => 'Abbrechen',
	'smw_qi_delete' => 'L&ouml;schen',
	'smw_qi_close' => 'Schlie&szlig;en',
	'smw_qi_preview' => 'Vorschau',
	'smw_qi_no_preview' => 'Noch keine Vorschau verf&uuml;gbar',
	'smw_qi_clipboard' => 'In die Zwischenablage kopieren',
	'smw_qi_reset' => 'Query zur&uuml;cksetzen',
	'smw_qi_reset_confirm' => 'M&ouml;chten Sie Ihren Query wirklich zur&uuml;ck setzen?',
	'smw_qi_querytree_heading' => 'Query Baumnavigation',
	'smw_qi_main_query_name' => 'Hauptquery',
	'smw_qi_layout_manager' => 'Query Layout Manager',
	'smw_qi_table_column_preview' => 'Vorschau der Tabellenspalten',
	'smw_qi_article_title' => 'Artikel',
	'smw_qi_load' => 'Query laden',
	'smw_qi_save' => 'Query speichern',
	'smw_qi_close_preview' => 'Vorschau schlie&szlig;en',
	'smw_qi_querySaved' => 'Der Query wurde erfolgreich gespeichert',
	'smw_qi_exportXLS' => 'Ergebnisse nach Excel exportieren',
	'smw_qi_showAsk' => 'Kompletten Query anzeigen',
	'smw_qi_ask' => '&lt;ask&gt; syntax',
	'smw_qi_parserask' => '{{#ask syntax',

	/*Tooltips for Query Interface*/
	'smw_qi_tt_addCategory' => 'Indem man eine Kategorie hinzuf&uuml;gt, werden nur Artikel aus dieser Kategorie ber&uuml;cksichtigt',
	'smw_qi_tt_addInstance' => 'Indem man ein Instanz hinzuf&uuml;gt, wird nur der ensprechende Artikel ber&uuml;cksichtigt',
	'smw_qi_tt_addProperty' => 'Indem man ein Attribut hinzuf&uuml;gt, kann man sich die Werte dieses Attribute anzeigen lassen oder erlaubte Werte vorgeben',
	'smw_qi_tt_tcp' => 'Die Vorschau der Tabellenspalten zeigt, aus welchen Spalten die Ergebnistabelle bestehen wird',
	'smw_qi_tt_qlm' => 'Der Query Layout Manager erlaubt es, das Ausgabeformat Ihres Queries anzupassen',
	'smw_qi_tt_preview' => 'Anzeigen einer vollst&auml;ndigen Vorschau der Ergebnisse, einschlie&szlig;lich der Layouteinstellungen',
	'smw_qi_tt_clipboard' => 'Kopiert den Query in die Zwischenablage, so dass dieser einfach in einen Artikel eingef&uuml;gt werden kann',
	'smw_qi_tt_showAsk' => 'Anzeigen des kompletten Ask-Queries',
	'smw_qi_tt_reset' => 'Zur&uuml;cksetzen des gesamten Queries',
	'smw_qi_tt_format' => 'Ausgabeformat des Queries',
	'smw_qi_tt_link' => 'Bestimmt, welche Teile der Ergebnistabelle als Link dargestellt werden',
	'smw_qi_tt_intro' => 'Text, der vor den Queryergebnissen ausgegeben wird',
	'smw_qi_tt_sort' => 'Spalte, nach welcher die Sortierung erfolgt',
	'smw_qi_tt_limit' => 'Maximale Anzahl der angezeigten Ergebnisse',
	'smw_qi_tt_mainlabel' => '&uuml;berschrift der ersten Spalte',
	'smw_qi_tt_order' => 'Auf- oder absteigende Sortierung',
	'smw_qi_tt_headers' => 'Tabellen&uuml;berschriften anzeigen oder nicht',
	'smw_qi_tt_default' => 'Text, der ausgegeben wird, falls keine Ergebnisse existieren',
	
	/* Annotation */
 	'smw_annotation_tab' => 'Seite annotieren',
	'smw_annotating'     => 'Annotiere $1',
	'annotatethispage'   => 'Annotiere diese Seite',

	/* Refactor preview */
 	'refactorstatistics' => 'Refactor Statistics',
 	'smw_ob_link_stats' => '&Ouml;ffne refactor statistics',
 	
 	/* SMWFindWork */
 	'findwork' => 'Suche Arbeit',
 	'smw_findwork_docu' => 'Diese Seite zeigt Ihnen Artikel die wahrscheinlich in ihr Interessensgebiet fallen. Viel Spass!',
 	'smw_findwork_user_not_loggedin' => 'Sie sind NICHT eingeloggt. Es ist möglich die Seite anonym zu nutzen, aber sie bringt bessere Ergebnisse wenn Sie eingeloggt sind.',
 	'smw_findwork_header' => 'Die Artikel-Liste enthält Artikel basierend auf ihrer Editier-History und offenen Gardening-Problemen. Wenn Sie nicht wissen was sie auswählen sollen, drücken Sie einfach $1. Das Wiki wählt dann etwas aus.<br>Wenn Sie wollen konnen Sie das Ergebnis auch genauer eingrenzen: ',
 	'smw_findwork_rateannotations' => '<h2>Bewerten Sie Annotationen</h2>Sind diese Annotationen korrekt? Bitte nehmen Sie sich einen Moment Zeit.<br><br>',
 	'smw_findwork_yes' => 'Ja',
 	'smw_findwork_no' => 'Nein',
 	'smw_findwork_dontknow' => 'Weiss nicht',
 	'smw_findwork_sendratings' => 'Sende Bewertung',
 	'smw_findwork_getsomework' => 'Irgendwelche Arbeit',
 	'smw_findwork_show_details' => 'Zeige Details',
 	'smw_findwork_heresomework' => 'Zufällig ausgewählte Arbeit',
 	
 	'smw_findwork_select' => 'Wähle',
 	'smw_findwork_generalconsistencyissues' => 'Allgemeine Konsistenz-Probleme',
 	'smw_findwork_missingannotations' => 'Fehlende Annotationen',
 	'smw_findwork_nodomainandrange' => 'Attribute ohne Domain/Range',
 	'smw_findwork_instwithoutcat' => 'Instanzen ohne Kategorie',
 	'smw_findwork_categoryleaf' => 'Kategorie-Blätter',
 	'smw_findwork_subcategoryanomaly' => 'Subkategorie-Anomalien',
 	'smw_findwork_undefinedcategory' => 'Undefinierte Kategorien',
 	'smw_findwork_undefinedproperty' => 'Undefinierte Attribute',
 	'smw_findwork_lowratedannotations' => 'Artikel mit schlechten Annotationen',
 	 	
 	/* Gardening Issue Highlighting in Inline Queries */
	'smw_iqgi_missing' => 'fehlt',
	'smw_iqgi_wrongunit' => 'falsche Einheit',
	
	
	
	/* Messages of the Thesaurus Import */
	'smw_ti_succ_connected' => 'Erfolgreich mit "$1" verbunden.',
	'smw_ti_class_not_found' => 'Klasse "$1" nicht gefunden.',
	'smw_ti_no_tl_module_spec' => 'Die Spezifikation des TL-Moduls mit der ID "$1" konnte nicht gefunden werden.',
	'smw_ti_xml_error' => 'XML Fehler: $1 in Zeile $2',
	'smw_ti_filename'  => 'Dateiname:',
	'smw_ti_fileerror' => 'Die Datei "$1" existiert nicht oder ist leer.',
	'smw_ti_no_article_names' => 'In der angegebenen Datenquelle gibt es keine Artikelnamen.',
	'smw_ti_termimport' => 'Vokabular importieren',
	'termimport' => 'Vokabular importieren',
	'smw_ti_botstarted' => 'Der Bot zum Importieren eines Vokabulars wurde erfolgreich gestartet.',
	'smw_ti_botnotstarted' => 'Der Bot zum Importieren eines Vokabulars konnte nicht gestartet werden.',
	'smw_ti_couldnotwritesettings' => 'Die Einstellungen für den Vokabelimportbot konnten nicht gespeichert werden.',
	'smw_ti_missing_articlename' => 'Ein Artikel konnte nicht erzeugt werden, da der "articleName" in der Beschreibung des Begriffs fehlt.',
	'smw_ti_invalid_articlename' => 'Der Artikelname "$1" ist ungültig.',
	'smw_ti_articleNotUpdated' => 'Der existierende Artikel "$1" wurde nicht durch eine neue Version ersetzt.',
	'smw_ti_creationComment' => 'Dieser Artikel wurde vom Vokalbelimport-Framework erzeugt bzw. aktualisiert.',
	'smw_ti_creationFailed'  => 'Der Artikel "$1" konnte nicht erzeugt bzw. aktualisiert werden.',
	'smw_ti_missing_mp' => 'Die Mapping Policy fehlt.',
	'smw_ti_import_error' => 'Importfehler',
	'smw_ti_added_article' => '$1 wurde zum Wiki hinzugefügt.',
	'smw_ti_updated_article' => '$1 wurde aktualisiert.',
	'smw_ti_import_errors' => 'Einige Begriffe wurden nicht korrekt importiert. Bitte schauen Sie sich das Gardening Log an!',
	'smw_ti_import_successful' => 'Alle Begriffe wurden erfolgreich importiert.',

	'smw_gardissue_ti_class_added_article' => 'Importierte Artikel',
	'smw_gardissue_ti_class_updated_article' => 'Aktualisierte Artikel',
	'smw_gardissue_ti_class_system_error' => 'Importsystemfehler',
	'smw_gardissue_ti_class_update_skipped' => 'Übersprungene Aktualisierungen',

	/* Messages for the wiki web services */
	'smw_wws_articles_header' => 'Seiten, die den Web-Service "$1" benutzen',
	'smw_wws_properties_header' => 'Eigenschaften, die von "$1" gesetzt werden',
	'smw_wws_articlecount' => '<p>Zeige $1 Seiten, die diesen Web-Service benutzen.</p>',
	'smw_wws_propertyarticlecount' => '<p>Zeige $1 Eigenschaften, die ihren Wert von diesem Web-Service erhalten.</p>',
	'smw_wws_invalid_wwsd' => 'Die Wiki Web Service Definition ist ungültig oder existiert nicht.',
	'smw_wws_wwsd_element_missing' => 'Das Element "$1" fehlt in der Wiki Web Service Definition.',
	'smw_wws_wwsd_attribute_missing' => 'Das Attribut "$1" fehlt im Element "$2" der Wiki Web Service Definition.',
	'smw_wws_too_many_wwsd_elements' => 'Das Element "$1" erscheint mehrmals Wiki Web Service Definition.',
	'smw_wws_wwsd_needs_namespace' => 'Bitte beachten Sie: Wiki Web-Service Definitionen werden nur in Artikeln mit dem Namensraum "WebService" berücksichtigt!',
	'smw_wws_wwsd_errors' => 'Die Wiki Web Service Definition ist fehlerhaft:',
	'smw_wws_invalid_protocol' => 'Das in der Wiki Web Service Definition benutzte Protokoll wird nicht unterstützt.',
	'smw_wws_invalid_operation' => 'Die Operation "$1" wird vom Web Service nicht unterstützt.',
	'smw_wws_parameter_without_name' => 'Ein Parameter der Wiki Web Service Definition hat keinen Namen.',
	'smw_wws_parameter_without_path' => 'Das Attribut "path" des Parameters "$1" fehlt.',
	'smw_wws_duplicate_parameter' => 'Der Parameter "$1" erscheint mehrmals.',
	'smw_wwsd_undefined_param' => 'Die Operation braucht den Parameter "$1". Bitte definieren Sie ein Kürzel.',
	'smw_wwsd_obsolete_param' => 'Die Operation benutzt den definierten Parameter "$1" nicht. Sie können ihn entfernen.',
	'smw_wwsd_overflow' => 'Die Struktur "$1" kann endlos fortgeführt werden. Parameter dieses Typs werden von der Wiki-Web-Service-Erweiterung nicht unterstützt.',
	'smw_wws_result_without_name' => 'Ein Resultat in der  Wiki Web Service Definition hat keinen Namen.',
	'smw_wws_result_part_without_name' => 'Das Resultat "$1" beinhaltet ein &lt;part&gt; ohne Namen.',
	'smw_wws_result_part_without_path' => 'Das Attribut "path" des &lt;part&gt;s "$1" des Resultats "$2" fehlt.',
	'smw_wws_duplicate_result_part' => 'Das &lt;part&gt; "$1" erscheint mehrmals im Resultat "$2".',
	'smw_wws_duplicate_result' => 'Das Resultat "$1" erscheint mehrmals.',
	'smw_wwsd_undefined_result' => 'Der Pfad des Resultats "$1" kann nicht im Resultat des Services gefunden werden.',
    
    // Triple Store Admin
    'tsa' => 'Triplestore Administration',
    'smw_tsa_welcome' => 'Diese Spezialseite hilft ihnen die Wiki/Triplestore Verbindung zu konfiguieren.',
    'smw_tsa_couldnotconnect' => 'Kann keine Verbindung zu einem Triple store aufbauen.',
    'smw_tsa_notinitalized' => 'Das Wiki ist nicht mit einem Triple store verbunden.',
    'smw_tsa_waitsoemtime'=> 'Bitte warten Sie einige Sekunden und klicken dann auf diesen Link.',
    'smw_tsa_wikiconfigured' => 'Das Wiki ist mit dem Triple store an $1 verbunden.',
    'smw_tsa_initialize' => 'Initialisieren',
    'smw_tsa_pressthebutton' => 'Bitte den Knopf unten drücken.',
    'smw_tsa_addtoconfig' => 'Bitte fügen Sie folgende Zeilen in die LocalSettings.php ein und prüfen Sie ob der Triple store connector läuft.',
    'smw_tsa_addtoconfig2' => 'Stellen Sie sicher, dass der Triplestore-Treiber aktiviert ist. Wenn nötig, ändern Sie den Aufruf von enableSMWHalo zu: ',
    'smw_tsa_addtoconfig3' => 'Stellen Sie ebenso sicher, dass die Wiki-URL valide ist. Sie darf außerdem kein Hash (#) enthalten. Wenn nötig, ändern Sie den Aufruf von enableSemantics z.B. zu ',
    
    'smw_tsa_driverinfo' => 'Treiberinformation',
    'smw_tsa_status' => 'Status',
    'smw_tsa_rulesupport'=> 'Der Triplestore-Treiber unterstützt Regeln, deshalb sollten Sie <pre>$smwgEnableFlogicRules=true;</pre> in ihrer LocalSettings.php aktivieren. Andernfalls werden Regeln nicht funktionieren.',
    'smw_tsa_norulesupport'=> 'Der Triplestore-Treiber unterstützt keine Regeln, obwohl sie im Wiki aktiviert sind. Bitte entfernen Sie <pre>$smwgEnableFlogicRules=true;</pre> aus ihrer LocalSettings.php. Andernfalls könnten Sie seltsame Fehlermeldungen erhalten.',

    // Simple Rules formula parser
	'smw_srf_expected_factor' => 'Erwarte eine Funktion, Variable, Konstante oder Klammer bei $1',
	'smw_srf_expected_comma' => 'Erwarte ein Komma bei $1',
	'smw_srf_expected_(' => 'Erwarte eine öffnende Klammer bei $1',
	'smw_srf_expected_)' => 'Erwarte eine schließende Klammer bei $1',
	'smw_srf_expected_parameter' => 'Erwarte einen Parameter bei $1',
	'smw_srf_missing_operator' => 'Erwarte eine Operator bei $1',
	
	// Explanations
	'smw_explanations' => 'Explanations',
	'explanations' => 'Explanations',
	'smw_expl_not_all_inputs' => 'Bitte füllen Sie alle obenstehenden Felder aus.',
	'smw_expl_and' => 'UND',
	'smw_expl_because' => 'WEIL',
	'smw_expl_value' => 'Wert',
	'smw_expl_img' => 'Erklärung anfordern',
	'smw_expl_explain_category' => 'Erklärung für Kategoriezuordnung:',
	'smw_expl_explain_property' => 'Erklärung für Propertyzuordnung:',
	'smw_expl_error' => 'Leider gab es einen Fehler während der Auswertung der Erklärung:',

	
	// Derived facts
	'smw_df_derived_facts_about' => 'Abgeleitete Fakten über $1'
	
);

protected $smwSpecialProperties = array(
	//always start upper-case
	"___cfsi" => 'Entspricht SI'
);


var $smwSpecialSchemaProperties = array (
	SMW_SSP_HAS_DOMAIN_AND_RANGE_HINT  => 'Hat Domain und Range',
	SMW_SSP_HAS_MAX_CARD => 'Hat max Kardinalität',
	SMW_SSP_HAS_MIN_CARD => 'Hat min Kardinalität',
	SMW_SSP_IS_INVERSE_OF => 'Ist invers zu',
	SMW_SSP_IS_EQUAL_TO => 'Ist gleich zu'
	);

var $smwSpecialCategories = array (
	SMW_SC_TRANSITIVE_RELATIONS => 'Transitive Attribute',
	SMW_SC_SYMMETRICAL_RELATIONS => 'Symmetrische Attribute'
);


var $smwHaloDatatypes = array(
	'smw_hdt_chemical_formula' => 'Chemische Formel',
	'smw_hdt_chemical_equation' => 'Chemische Gleichung',
	'smw_hdt_mathematical_equation' => 'Mathematische Gleichung'
);

protected $smwHaloNamespaces = array(
	SMW_NS_WEB_SERVICE       => 'WebService',
	SMW_NS_WEB_SERVICE_TALK  => 'WebService_talk'
);

protected $smwHaloNamespaceAliases = array(
	'WebService'       => SMW_NS_WEB_SERVICE,
	'WebService_talk'  => SMW_NS_WEB_SERVICE_TALK 
);


	/**
	 * Function that returns the namespace identifiers.
	 */
	public function getNamespaceArray() {
		return array(
			SMW_NS_RELATION       => "Relation",
			SMW_NS_RELATION_TALK  => "Relation_Diskussion",
			SMW_NS_PROPERTY       => "Eigenschaft",
			SMW_NS_PROPERTY_TALK  => "Eigenschaft_Diskussion",
			SMW_NS_TYPE           => "Datentyp",
			SMW_NS_TYPE_TALK      => "Datentyp_Diskussion"
		);
	}

}

