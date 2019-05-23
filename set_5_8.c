#include <stdio.h>
#include<string.h>
int main()
{
    int a[10],k,n,c=0,i;
    scanf("%d %d",&n,&k);
    for(i=0;i<n;i++)
    {
        scanf("%d",&a[i]);
        if(a[i]==k)
        {
            c=c+1;
        }
    }
    printf("%d",c);
    return 0;
}
