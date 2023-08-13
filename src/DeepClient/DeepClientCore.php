<?php

namespace DeepFoundation\DeepClient;

class DeepClientCore
{
	public static array $_ids = [
		"@deep-foundation/core" => [
			"Type" => 1,
			"Package" => 2,
			"Contain" => 3,
			"Value" => 4,
			"String" => 5,
			"Number" => 6,
			"Object" => 7,
			"Any" => 8,
			"Promise" => 9,
			"Then" => 10,
			"Resolved" => 11,
			"Rejected" => 12,
			"typeValue" => 13,
			"packageValue" => 14,
			"Selector" => 15,
			"SelectorInclude" => 16,
			"Rule" => 17,
			"RuleSubject" => 18,
			"RuleObject" => 19,
			"RuleAction" => 20,
			"containValue" => 21,
			"User" => 22,
			"Operation" => 23,
			"operationValue" => 24,
			"AllowInsert" => 25,
			"AllowUpdate" => 26,
			"AllowDelete" => 27,
			"AllowSelect" => 28,
			"File" => 29,
			"SyncTextFile" => 30,
			"syncTextFileValue" => 31,
			"ExecutionProvider" => 32,
			"JSExecutionProvider" => 33,
			"TreeInclude" => 34,
			"Handler" => 35,
			"Tree" => 36,
			"TreeIncludeDown" => 37,
			"TreeIncludeUp" => 38,
			"TreeIncludeNode" => 39,
			"containTree" => 40,
			"containTreeContain" => 41,
			"containTreeAny" => 42,
			"PackageNamespace" => 43,
			"packageNamespaceValue" => 44,
			"PackageActive" => 45,
			"PackageVersion" => 46,
			"packageVersionValue" => 47,
			"HandleOperation" => 48,
			"HandleInsert" => 49,
			"HandleUpdate" => 50,
			"HandleDelete" => 51,
			"PromiseResult" => 52,
			"promiseResultValueRelationTable" => 53,
			"PromiseReason" => 54,
			"Focus" => 55,
			"focusValue" => 56,
			"AsyncFile" => 57,
			"Query" => 58,
			"queryValue" => 59,
			"Fixed" => 60,
			"fixedValue" => 61,
			"Space" => 62,
			"spaceValue" => 63,
			"AllowLogin" => 64,
			"guests" => 65,
			"Join" => 66,
			"joinTree" => 67,
			"joinTreeJoin" => 68,
			"joinTreeAny" => 69,
			"SelectorTree" => 70,
			"AllowAdmin" => 71,
			"SelectorExclude" => 72,
			"SelectorFilter" => 73,
			"HandleSchedule" => 74,
			"Schedule" => 75,
			"scheduleValue" => 76,
			"Router" => 77,
			"IsolationProvider" => 78,
			"DockerIsolationProvider" => 79,
			"dockerIsolationProviderValue" => 80,
			"JSDockerIsolationProvider" => 81,
			"Supports" => 82,
			"dockerSupportsJs" => 83,
			"PackageInstall" => 84,
			"PackagePublish" => 85,
			"packageInstallCode" => 86,
			"packageInstallCodeHandler" => 87,
			"packageInstallCodeHandleInsert" => 88,
			"packagePublishCode" => 89,
			"packagePublishCodeHandler" => 90,
			"packagePublishCodeHandleInsert" => 91,
			"Active" => 92,
			"AllowPackageInstall" => 93,
			"AllowPackagePublish" => 94,
			"PromiseOut" => 95,
			"promiseOutValue" => 96,
			"PackageQuery" => 97,
			"packageQueryValue" => 98,
			"Port" => 99,
			"portValue" => 100,
			"HandlePort" => 101,
			"PackageInstalled" => 102,
			"PackagePublished" => 103,
			"Route" => 104,
			"RouterListening" => 105,
			"RouterStringUse" => 106,
			"routerStringUseValue" => 107,
			"HandleRoute" => 108,
			"routeTree" => 109,
			"routeTreePort" => 110,
			"routeTreeRouter" => 111,
			"routeTreeRoute" => 112,
			"routeTreeHandler" => 113,
			"routeTreeRouterListening" => 114,
			"routeTreeRouterStringUse" => 115,
			"routeTreeHandleRoute" => 116,
			"TreeIncludeIn" => 117,
			"TreeIncludeOut" => 118,
			"TreeIncludeFromCurrent" => 119,
			"TreeIncludeToCurrent" => 120,
			"TreeIncludeCurrentFrom" => 121,
			"TreeIncludeCurrentTo" => 122,
			"TreeIncludeFromCurrentTo" => 123,
			"TreeIncludeToCurrentFrom" => 124,
			"AllowInsertType" => 125,
			"AllowUpdateType" => 126,
			"AllowDeleteType" => 127,
			"AllowSelectType" => 128,
			"ruleTree" => 129,
			"ruleTreeRule" => 130,
			"ruleTreeRuleAction" => 131,
			"ruleTreeRuleObject" => 132,
			"ruleTreeRuleSubject" => 133,
			"ruleTreeRuleSelector" => 134,
			"ruleTreeRuleQuery" => 135,
			"ruleTreeRuleSelectorInclude" => 136,
			"ruleTreeRuleSelectorExclude" => 137,
			"ruleTreeRuleSelectorFilter" => 138,
			"Plv8IsolationProvider" => 139,
			"JSminiExecutionProvider" => 140,
			"plv8SupportsJs" => 141,
			"Authorization" => 142,
			"GeneratedFrom" => 143,
			"ClientJSIsolationProvider" => 144,
			"clientSupportsJs" => 145,
			"Symbol" => 146,
			"symbolValue" => 147,
			"containTreeSymbol" => 148,
			"containTreeThen" => 149,
			"containTreeResolved" => 150,
			"containTreeRejected" => 151,
			"handlersTree" => 152,
			"handlersTreeHandler" => 153,
			"handlersTreeSupports" => 154,
			"handlersTreeHandleOperation" => 155,
			"HandleClient" => 156,
			"HandlingError" => 157,
			"handlingErrorValue" => 158,
			"HandlingErrorReason" => 159,
			"HandlingErrorLink" => 160,
			"GqlEndpoint" => 161,
			"MainGqlEndpoint" => 162,
			"HandleGql" => 163,
			"SupportsCompatable" => 164,
			"plv8JSSupportsCompatableHandleInsert" => 165,
			"plv8JSSupportsCompatableHandleUpdate" => 166,
			"plv8JSSupportsCompatableHandleDelete" => 167,
			"dockerJSSupportsCompatableHandleInsert" => 168,
			"dockerJSSupportsCompatableHandleUpdate" => 169,
			"dockerJSSupportsCompatableHandleDelete" => 170,
			"dockerJSSupportsCompatableHandleSchedule" => 171,
			"dockerJSSupportsCompatableHandlePort" => 172,
			"dockerJSSupportsCompatableHandleRoute" => 173,
			"clientJSSupportsCompatableHandleClient" => 174,
			"promiseTree" => 175,
			"promiseTreeAny" => 176,
			"promiseTreeThen" => 177,
			"promiseTreePromise" => 178,
			"promiseTreeResolved" => 179,
			"promiseTreeRejected" => 180,
			"promiseTreePromiseResult" => 181,
			"MigrationsEnd" => 182
		]
	];

	public static array $_serialize = [
		"links" => [
			"fields" => [
				"id" => "number",
				"from_id" => "number",
				"to_id" => "number",
				"type_id" => "number",
			],
			"relations" => [
				"from" => "links",
				"to" => "links",
				"type" => "links",
				"in" => "links",
				"out" => "links",
				"typed" => "links",
				"selected" => "selector",
				"selectors" => "selector",
				"value" => "value",
				"string" => "value",
				"number" => "value",
				"object" => "value",
				"can_rule" => "can",
				"can_action" => "can",
				"can_object" => "can",
				"can_subject" => "can",
				"down" => "tree",
				"up" => "tree",
				"tree" => "tree",
				"root" => "tree",
			],
		],
		"selector" => [
			"fields" => [
				"item_id" => "number",
				"selector_id" => "number",
				"query_id" => "number",
				"selector_include_id" => "number",
			],
			"relations" => [
				"item" => "links",
				"selector" => "links",
				"query" => "links",
			]
		],
		"can" => [
			"fields" => [
				"rule_id" => "number",
				"action_id" => "number",
				"object_id" => "number",
				"subject_id" => "number",
			],
			"relations" => [
				"rule" => "links",
				"action" => "links",
				"object" => "links",
				"subject" => "links",
			]
		],
		"tree" => [
			"fields" => [
				"id" => "number",
				"link_id" => "number",
				"tree_id" => "number",
				"root_id" => "number",
				"parent_id" => "number",
				"depth" => "number",
				"position_id" => "string",
			],
			"relations" => [
				"link" => "links",
				"tree" => "links",
				"root" => "links",
				"parent" => "links",
				"by_link" => "tree",
				"by_tree" => "tree",
				"by_root" => "tree",
				"by_parent" => "tree",
				"by_position" => "tree",
			]
		],
		"value" => [
			"fields" => [
				"id" => "number",
				"link_id" => "number",
				"value" => "value",
			],
			"relations" => [
				"link" => "links",
			],
		],
	];
}