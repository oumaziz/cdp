loadData(
	{
		 name: 'PERT Diagram',
		 nodes: [
			{ id: 'node0', value: { label: 'Start | 0 | 0' } },
			{ id: 'node1', value: { label: '1 | 365 | -1' } },
		 ],
		 links:[
			{ u: 'node0', v: 'node1', value: { label: 'BASE[365]' } },
		 ]
	}
);