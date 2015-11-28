loadData(
	{
		 name: 'PERT Diagram',
		 nodes: [
			{ id: 'node0', value: { label: 'Start | 0 | 0' } },
			{ id: 'node1', value: { label: '1 | 1 | 0' } },
			{ id: 'node2', value: { label: '2 | 9 | 0' } },
		 ],
		 links:[
			{ u: 'node0', v: 'node1', value: { label: 'SSSS[1]' } },
			{ u: 'node0', v: 'node2', value: { label: 'PAGACC[9]' } },
		 ]
	}
);